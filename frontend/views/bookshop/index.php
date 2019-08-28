<?php
/* @var $this yii\web\View */
/* @var $booklist frontend\models\Book */


?>
<h1>Books!</h1>


<?php foreach($bookList as $book): ?>
    <div class="col-md-10">
        <h3><?= $book->name; ?></h3>
        <p><?= $book->getDatePublished(); ?></p>
        <p><?= $book->getPublisherName();    ?></p>
    </div>
<?php endforeach;