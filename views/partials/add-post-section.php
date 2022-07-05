<!---- Add new post section   ---->

<?php if(isset($_SESSION['username'])) { ?>
    <h3>Add new post</h3>
    <form method="POST" action="/new-post">
        Title: <input type="text" name="titlePost">
        Content: <input type="text" name="contentPost">

        <!-- select dynamically populated from the categories in the database --->
        Category: <select name="ksCategory">
            <?php foreach($categories as $category) : ?>
                <option value="<?= $category->idCategory; ?>"><?= $category->titleCategory; ?></option>
            <?php endforeach ?>
                </select>

        <!-- select dynamically populated from the tags in the database --->
        Tags: <select name="idTags[]" multiple>
            <?php foreach($tags as $tag) : ?>
                <option value="<?= $tag->idTag; ?>"><?= $tag->titleTag; ?></option>
            <?php endforeach ?>
                </select>
        <input type="submit" value="Send">
    </form>

<?php } ?>