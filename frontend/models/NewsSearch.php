<?php

namespace frontend\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * Description of NewsSearch
 *
 * @author max
 */
class NewsSearch {
    
    public function simpleSearch($keyword)
    {
        $sql = "SELECT * FROM news WHERE content LIKE '%$keyword%' LIMIT 20";
        return Yii::$app->db->createCommand($sql)->queryAll();
    }
    
    public function fulltextSearch($keyword)
    {
        $params = [
            ':keyword' => $keyword,
        ];
        $sql = "SELECT * FROM news WHERE MATCH (content) AGAINST (:keyword) LIMIT 20";
        return Yii::$app->db->createCommand($sql)->bindValues($params)->queryAll();
    }
    
    public function advancedSearch($keyword)
    {
       
        $sql = "SELECT * FROM idx_news_content WHERE MATCH ('$keyword') OPTION ranker = WORDCOUNT";
        $data = Yii::$app->sphinx->createCommand($sql)->queryAll();
        
        $ids = ArrayHelper::map($data, 'id', 'id');
        
        $data = News::find()->where(['id' => $ids])->asArray()->all();
        return $data;
        
        //var_dump($ids);die;
    }
}
