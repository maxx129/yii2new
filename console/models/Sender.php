<?php

namespace console\models;

use Yii;
/**
 * Description of Sender
 *
 * @author Max
 */
class Sender {
    
    public static function run($subsribers, $newsList) {
        
        foreach ($subsribers as $subsriber) {
            
        $result = Yii::$app->mailer->compose('/mailer/newslist', [
            'newsList' => $newsList
        ])
        ->setFrom('max.anga.inc@gmail.com')
        ->setTo($subsriber['email'])
        ->setSubject('Тема сообщения11111111111')
        ->send();
            
        var_dump($result);
            
            
        }
        
        
    }
}
