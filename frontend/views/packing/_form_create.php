<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Packing */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="packing-form-create">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'number')->textInput(['maxlength' => true])->textInput(['autofocus' => true]) ?>
    
    <?= $form->field($model, 'number_ordered')->textInput(['maxlength' => true]) ?>
            
    <?= $form->field($model, 'klient1')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'brand')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qty_start')->textInput() ?>

    <?= $form->field($model, 'qty_finish') ?>
            
    <?= $form->field($model, 'weight')->textInput() ?>
    
    <?= $form->field($model, 'only_brand')->textInput() ?>
    
     <?= $form->field($model, 'my_id')->textInput() ?>
    
     <?= $form->field($model, 'price')->textInput() ?>
   
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
