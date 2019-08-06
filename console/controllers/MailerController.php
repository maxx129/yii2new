<?php

namespace console\controllers;

use yii\helpers\Console;
use console\models\News;
use console\models\Subscriber;
use console\models\Sender;


/**
 * Description of MasilerController
 *
 * @author Max
 */
class MailerController extends \yii\console\Controller {
    
    public function actionSend() {
        
        $newsList = News::getList();
        $subsribers = Subscriber::getList();
        
        $count = Sender::run($subsribers, $newsList);
        
        Console::output("\nEmails sent: {$count}");
        

    }
}
