<?php

namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\Test;
use Yii;

/**
 * Description of TestController
 *
 * @author Max
 */
class TestController extends Controller{
    
    public function actionIndex() {
        
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
