<?php

use yii\helpers\Html;

echo Html::tag('h2', 'Hello Helper!');

$array = [
    '1' => 'Moscow',
    '2' => 'Minsk',
    '3' => 'Piter',
    '4' => 'Tula',
];

echo Html::dropDownList('city_id', [], $array);
echo Html::radioList('city_id', [], $array);
echo Html::checkboxList('city_id', [], $array);

echo Html::img('@images/watch.jpg');






