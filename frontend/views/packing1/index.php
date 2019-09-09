<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Packing';
$this->params['breadcrumbs'][] = $this->title;
?>





<div class="packing-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Packing', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'number',
            'description',
            'qty1',
            'qty2',
            'brand',
            'weight',
            'klient',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>