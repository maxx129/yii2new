<?php

namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\Test;
use Yii;

/**
 * Изменение для git
 *
 * @author Max
 */
class TestController extends Controller{
    
    public function actionIndex() {
        
        Yii::setAlias('@123', '/app/frontend');
        $result = mkdir(Yii::getAlias('@123'.'/123'));
        var_dump($result);die;
       
        $max = Yii::$app->params['limitMaxNews'];
                
        $list = Test::getNewsList($max);
                
        return $this->render('index', [
            'listing' => $list,
        ]);
    }
    
    public function actionView($id) {
        
        $item = Test::getItem($id);
        
        return $this->render('view', [
            'item' => $item,
        ]);
        
    }


    
    
     public function actionMail()
        {
            $result = Yii::$app->mailer->compose()
               ->setFrom('max.anga.inc@gmail.com')
               ->setTo('maxx129@yandex.ru')
               ->setSubject('Тема сообщения11111111111')
               ->setTextBody('Текст сообщения')
               ->setHtmlBody('<b>текст сообщения в формате HTML</b>')
               ->send();
            
       var_dump($result);
        }
    
    
    
}
