<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Packing */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="packing-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php (stripos($model->only_brand, 'nly') && $model->klient2 == '#Н/Д') ? $colorOnly = 'red' : $colorOnly = 'white'; ?>
    <?= $form->field($model, 'number')->textInput(['maxlength' => true, 'style' => "background-color:$colorOnly"]) ?>
    
    <?php $model->klient1 == 'Отказ' ? $colorCancel = 'yellow' : $colorCancel = 'white'; ?>
    <?= $form->field($model, 'klient1')->textInput(['maxlength' => true, 'style' => "background-color:$colorCancel"]) ?>
    
    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'brand')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qty_start')->textInput() ?>

    <?= $form->field($model, 'qty_finish')->textInput()->textInput(['autofocus' => true]) ?>
            
    <?= $form->field($model, 'weight')->textInput() ?>
    
    <?= $form->field($model, 'only_brand')->textInput() ?>
   
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
