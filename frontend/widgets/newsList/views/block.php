<?php  
    foreach($listing as $item) {?>

<h3><a href="<?php echo Yii::$app->urlManager->createUrl(['test/view', 'id' => $item['id']]); ?>"><?= $item['title'];?></a></h3><br>
    <p><?= $item['content'];?></p><br>
    <hr>

    <?php   
    }
