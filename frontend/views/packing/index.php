<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Прием груза';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="packing-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить строчку', ['create'], ['class' => 'btn btn-success']); ?>
        <?= Html::a('Поиск', ['search'], ['class' => 'btn btn-success']); ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'number',
            
            ['class' => 'yii\grid\ActionColumn',
                'header'=>'Edit', 
                'headerOptions' => ['width' => '40'],
                'template' => '{update}',
                ],
            
            'qty_start',
            'qty_finish',
            'weight',
            'klient1',
            'description',
            'brand',
            ['class' => 'yii\grid\ActionColumn',
                'header'=>'Действие', 
                'headerOptions' => ['width' => '40'],
                'template' => '{view} {delete}{link}',
                ],
                       
        ],
    ]); ?>


</div>
