<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>

<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($book, 'name'); ?>
    <?= $form->field($book, 'isbn'); ?>
    <?= $form->field($book, 'date_published'); ?>
    <?= $form->field($book, 'publisher_id'); ?>

    <?= Html::submitButton('Save', [
        'class' => 'btn btn-prymary',
    ]); ?>

<?php ActiveForm::end(); ?>

