<?php require('partials/head.php'); ?>

<!---- Posts List section   ---->
<?php require('partials/post-list.php'); ?>


<!---- Add new post section   ---->

<?php if(isset($_SESSION['username'])) { ?>
    <h3>Add new post</h3>
    <form method="POST" action="/new-post">
        Title: <input type="text" name="titlePost">
        Content: <input type="text" name="contentPost">
        Category: <select name="ksCategory">
            <?php foreach($categories as $category) : ?>
                <option value="<?= $category->idCategory; ?>"><?= $category->titleCategory; ?></option>
            <?php endforeach ?>
                </select>
        Tags: <input type="text" name="tags">
        <input type="submit" value="Send">
    </form>

<?php } ?>


    


    
<?php require('partials/footer.php'); ?>