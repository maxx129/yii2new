<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "packing".
 *
 * @property int $id
 * @property string $number
 * @property string $description
 * @property int $qty1
 * @property int $qty2
 * @property string $brand
 * @property double $weight
 * @property string $klient
 */
class Packing extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'packing';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['qty_start', 'qty_finish'], 'integer'],
            [['weight'], 'number'],
            [['number', 'description', 'brand', 'klient1'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'number' => 'Number',
            'description' => 'Description',
            'qty_start' => 'Qty1',
            'qty_finish' => 'Qty2',
            'brand' => 'Brand',
            'weight' => 'Weight',
            'klient1' => 'Klient',
        ];
    }
}
