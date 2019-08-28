<?php

namespace frontend\models;

use Yii;
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
    
    
    public function getDatePublished()
    {
        return $this->date_published ? Yii::$app->formatter->asDate($this->date_published) : "Not set";
    }
    
    
    public function getPublisher()
    {
        return $this->hasOne(Publisher::className(), ['id' => 'publisher_id'])->one();
    }
    
    
    public function getPublisherName()
    {
        if($this->getPublisher()) {
            return $this->getPublisher()->name;
        }
        
        return 'Not set';
    }
    
    
}
