<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;

//var_dump($employees);

$emails = ArrayHelper::getColumn($employees, 'email');

echo "Наши контакты ".implode(', ', $emails);
echo '<hr>';

$array = [
    '1' => 'Moscow',
    '2' => 'Minsk',
    '3' => 'Piter',
    '4' => 'Tula',
];

echo '<hr>';

$data = ArrayHelper::map($employees, 'id', 'email');
var_dump($data);
echo Html::dropDownList('city_id', [], $data);



