<?php
/* @var $this yii\web\View */

use yii\helpers\Url;
use yii\helpers\Html;

?>
<h1>author/index</h1>

<br>
<a href="<?= Url::to(['author/create']); ?>" class="btn btn-primary">Create New Author</a>
<br><br>



<table class="table-condensed">
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Second Name</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
  
    
<?php foreach($authorList as $author): ?>
    <tr>
        <td><?= $author->id; ?></td>
        <td><?= Html::encode($author->first_name); ?></td>
        <td><?= Html::encode($author->last_name); ?></td>
        <td><a href="<?= Url::to(['author/update', 'id' => $author->id]); ?>">Edit</a></td>
        <td><a href="<?= Url::to(['author/delete', 'id' => $author->id]); ?>">Delete</a></td>
    </tr>
<?php endforeach; ?>
</table>