<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>

<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($book, 'name')->textInput(['style' => 'width:450px']); ?>
    <?= $form->field($book, 'isbn')->textInput(['style' => 'width:450px']); ?>
    <?= $form->field($book, 'date_published')->textInput(['style' => 'width:450px']); ?>
    <?= $form->field($book, 'publisher_id')->textInput(['style' => 'width:450px']); ?>

    <?= Html::submitButton('Save', [
        'class' => 'btn btn-prymary',
    ]); ?>

<?php ActiveForm::end(); ?>

