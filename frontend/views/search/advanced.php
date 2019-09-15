<?php
/* @var $this yii\web\View */
/* @var $model frontend\models\form\SearchForm; */

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use frontend\helpers\HighlightHelper;

?>

<h1>search v.3</h1>

<div class="row">
    <div class="col-md-12">
        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'keyword'); ?>

        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']); ?>
        
        <?php ActiveForm::end(); ?>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <?php if ($result): ?>
            <?php foreach ($result as $item): ?>
                <?= $item['title']; ?>
                <br>
                <?= $item['content']; ?>
                <?php echo HighlightHelper::process($model->keyword, $item['content']); ?>
                <hr>    
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>

