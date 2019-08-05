<?php
use yii\helpers\Url;
?>


<h1><?= $item['title']; ?></h1>
<p><?= $item['content']; ?></p>

<a href="<?php echo Url::to(['test/index']);?>" class = "btn btn-info">Back</a> 