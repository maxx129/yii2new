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
            [['number', 'number_ordered', 'qty_finish'], 'required'],
            [['qty_start', 'qty_finish'], 'integer'],
            [['weight'], 'number'],
            [['number', 'description', 'brand', 'only_brand', 'klient1'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'number' => 'Номер',
            'description' => 'Наименование',
            'qty_start' => 'Заказано',
            'qty_finish' => 'Получено',
            'brand' => 'Бренд',
            'weight' => 'Вес',
            'klient1' => 'Клиент',
            'my_id' => 'my_id',
            'price' => 'Цена',
            'number_ordered' => 'Номер Исходный',
            'only_brand' => 'Only Brand',
        ];
    }
}
