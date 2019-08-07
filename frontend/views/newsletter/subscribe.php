<?php

//if(Yii::$app->session->hasFlash('Subscribe Status')) {
//    echo Yii::$app->session->getFlash('Subscribe Status');
//}


if($model->hasErrors()) {
    var_dump($model->getErrors());
} ?>



<form method="post">
    <p>Email: </p>
    <input type="text" name="email">
    <br><br>
    <input type="submit">
</form>

