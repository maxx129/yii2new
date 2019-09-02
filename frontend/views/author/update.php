<?php
/* @var $this yii\web\View */
/* @var $model frontend\models\Author */

use yii\helpers\Html;
use yii\widgets\ActiveForm;


?>
<h1>Update Author #ID: <?= $model->id; ?></h1>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'first_name')->textInput(['style' => 'width:450px']); ?>

<?= $form->field($model, 'last_name')->textInput(['style' => 'width:450px']); ?>

<?= $form->field($model, 'birthdate')->textInput(['style' => 'width:450px']); ?>

<?= $form->field($model, 'rating')->textInput(['style' => 'width:450px']); ?>

<?= Html::submitButton('Save', [
    'class' => 'btn btn-primary',
]); ?>


<?php ActiveForm::end(); ?>

