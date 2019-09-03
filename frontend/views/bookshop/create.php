<?php

/* @var $book frontend\models\Book */
/* @var $publishers frontend\models\Publisher */

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use dosamigos\datepicker\DatePicker;

?>

<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($book, 'name')->textInput(['style' => 'width:450px']); ?>
    <?= $form->field($book, 'isbn')->textInput(['style' => 'width:450px']); ?>
    
    <?= $form->field($book, 'date_published')->widget(
    DatePicker::className(), [
    // inline too, not bad
    'inline' => true, 
    // modify template for custom rendering
    'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
    'clientOptions' => [
    'autoclose' => true,
    'format' => 'yyyy-mm-dd'
    ]
    ]);?>

    <?= $form->field($book, 'publisher_id')->dropDownList($publishers); ?>

    <?= Html::submitButton('Save', [
        'class' => 'btn btn-prymary',
    ]); ?>

<?php ActiveForm::end(); ?>

