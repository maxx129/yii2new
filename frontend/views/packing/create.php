<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Packing */

//$this->title = 'Create Packing';
//$this->params['breadcrumbs'][] = ['label' => 'Packings', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="packing-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form_create', [
        'model' => $model,
    ]) ?>

</div>
