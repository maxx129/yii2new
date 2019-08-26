<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

if($model->hasErrors()) {
    var_dump($model->getErrors());
} ?>

<h1>Welcome to our Company!!!</h1>

<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'firstName'); ?>
    <?= $form->field($model, 'lastName'); ?>
    <?= $form->field($model, 'middleName'); ?>
    <?= $form->field($model, 'email'); ?>
    <?= $form->field($model, 'birthDate'); ?>
    <?= $form->field($model, 'hiringDate'); ?>
    <?= $form->field($model, 'position'); ?>
    <?= $form->field($model, 'idCode'); ?>
    <?= $form->field($model, 'city')->dropDownList($model->getCitiesList()); ?>

    <?= Html::submitButton('send', ['class' => 'btn btn-primary']); ?>


<?php ActiveForm::end(); ?>




