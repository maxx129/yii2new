<?php

namespace console\controllers;

use Yii;

/**
 * Description of MasilerController
 *
 * @author Max
 */
class MailerController extends \yii\console\Controller {
    
    public function actionSend() {
        
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
