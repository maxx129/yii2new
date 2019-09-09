<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Прием груза';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="packing-search">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Введите номер детали:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'search-form']); ?>

                <?= $form->field($packing, 'number')->textInput(['autofocus' => true]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>

