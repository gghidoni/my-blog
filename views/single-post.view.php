<!--- Single post page    --->

<?php require('partials/head.php'); ?>

<!--- Post content --->
<?php foreach($singlePost as $post) : ?>
    <h1><?= $post->titlePost; ?></h1>
    <div><?= $post->contentPost; ?></div>
    <span><?= $post->datePost; ?></span><br>
    <span>Author: <?= $post->username; ?></span><br>
    <span>Category: <?= $post->titleCategory; ?></span>
<?php endforeach ?>

<!--- Tags --->
    <h3>Tags</h3>
<?php foreach($tags as $tag) : ?>
    <span> #<?= $tag->titleTag;  ?> </span>
<?php endforeach ?>

<!--- Comments --->
<h3>Comments</h3>
<?php foreach($comments as $comment) : ?>
    <span>- <?= $comment->textComment;  ?> </span><br>
<?php endforeach ?>

<!--- Add new comment section --->
<h4>Add new comment</h4>
<form action="/new-comment" method="POST">
    <input type="text" name="textComment">
    <input type="hidden" name="ksPost" value="<?php echo $idPost; ?>">
    <input type="submit" value="Invia">
</form>




<?php require('partials/footer.php'); ?>