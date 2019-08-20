<?php

/**
 * $this yii\web\View
 */


//if(Yii::$app->session->hasFlash('Subscribe Status')) {
//    echo Yii::$app->session->getFlash('Subscribe Status');
//}
$this->title = "Подпишись, сволочь!!!";

$this->registerMetaTag([
    'name' => 'descriotion',
    'content' => 'description of the page...'
]);

$this->params['breadcrumbs'] = [
    'Test1',
    ['label' => 'Test 2', 'url' => ['/site/about']],
   
];


if($model->hasErrors()) {
    var_dump($model->getErrors());
} ?>


<form method="post">
    <p>Email: </p>
    <input type="text" name="email">
    <br><br>
    <input type="submit">
</form>

