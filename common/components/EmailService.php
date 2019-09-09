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
     * 
     * @param UserNotificationInterface $user
     * @param string $subject
     * return boolean
     */
    public function notifyUser(UserNotificationInterface $user, $subject) 
    {
        Yii::$app->mailer->compose()
                ->setFrom('max.anga.inc@gmail.com')
                ->setTo($user->getEmail())
                ->setSubject($subject)
                ->send();
    }
    
    /**
     * 
     * @param string $subject
     */
    public function notifyAdmin($subject) 
    {
        Yii::$app->mailer->compose()
                ->setFrom('max.anga.inc@gmail.com')
                ->setTo('maxx129@yandex.ru')
                ->setSubject($subject)
                ->send();
    }
}
