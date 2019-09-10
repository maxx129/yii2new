<?php

namespace common\components;

use Yii;
use yii\base\Component;
use common\components\UserNotificationInterface;

/**
 * @author max
 */

class EmailService extends Component 
{
    /**
     * @param UserNotificationInterface $event
     * return boolean
     */
    public function notifyUser(UserNotificationInterface $event) 
    {
        Yii::$app->mailer->compose()
                ->setFrom('max.anga.inc@gmail.com')
                ->setTo($event->getEmail())
                ->setSubject($event->getSubject())
                ->send();
    }
    
    /**
     * @param UserNotificationInterface $event
     * return boolean
     */
    public function notifyAdmin(UserNotificationInterface $event) 
    {
        Yii::$app->mailer->compose()
                ->setFrom('max.anga.inc@gmail.com')
                ->setTo('maxx129@yandex.ru')
                ->setSubject($event->getSubject())
                ->send();
    }
}
