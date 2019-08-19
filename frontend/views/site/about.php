<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    
    <div class="row">
        <div class="col-md-9">
            
            <h1><?= Html::encode($this->title) ?></h1>

            <p>This is the About page. You may modify the following file to customize its content:</p>

            <code><?= __FILE__ ?></code>
        
        </div>
        
        <div class="col-md-3">
            
             <?php  
                    foreach($listing as $item) {?>
                    <h2><a href="<?php echo Yii::$app->urlManager->createUrl(['test/view', 'id' => $item['id']]); ?>"><?= $item['title'];?></a></h2><br>
                    <p><?= $item['content'];?></p><br>
                    <hr>
            <?php   } ?>
                
        </div>
        
    </div>
    
    
</div>
