<?php

namespace console\models;

use Yii;

/**
 * Description of Subscriber
 *
 * @author Max
 */
class Subscriber {
    
    public static function getList() {
        $sql = "SELECT * FROM subscriber";
        return Yii::$app->db->createCommand($sql)->queryAll();
    }
}
