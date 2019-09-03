<?php

/* @var $book frontend\models\Book */
/* @var $publishers frontend\models\Publisher */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>

<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($book, 'name')->textInput(['style' => 'width:450px']); ?>
    <?= $form->field($book, 'isbn')->textInput(['style' => 'width:450px']); ?>
    <?= $form->field($book, 'date_published')->textInput(['style' => 'width:450px']); ?>
    <?= $form->field($book, 'publisher_id')->dropDownList($publishers); ?>

    <?= Html::submitButton('Save', [
        'class' => 'btn btn-prymary',
    ]); ?>

<?php ActiveForm::end(); ?>

