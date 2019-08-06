<?php

namespace console\models;

use Yii;

/**
 * Description of News
 *
 * @author Max
 */
class News {
    
    const STATUS_NOT_SEND = 1;
    
    public static function getList()
    {
        $sql = "SELECT * FROM news WHERE status = ".self::STATUS_NOT_SEND;        
        //return Yii::$app->db->createCommand($sql)->queryAll();
        $result = Yii::$app->db->createCommand($sql)->queryAll();
    
        return self::prepereList($result);
    }
    
    public static function prepereList($result)
    {
        if(!empty($result) && is_array($result)) {
            foreach($result as &$item) {
            $item['content'] = Yii::$app->stringHelper->getShort($item['content']);
            }
        }
        
        return $result;
    }
}
