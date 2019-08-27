<?php

namespace frontend\models;

use yii\db\ActiveRecord;
/**
 * @author Max
 */
class Book extends ActiveRecord {
    
    public static function tableName() {
        
        return '{{book}}';
    }
    
    
    public function rules() {
        
        return [
            [['name', 'publisher_id'], 'required'],
        ];
    }
}
