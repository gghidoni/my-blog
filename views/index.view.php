<?php require('partials/head.php'); ?>


<?php require('partials/post-list.php'); ?>

    

    <ul>
        <?php foreach($authors as $author) : ?>
            <li>
                
         
               
                    <?= $author->username;  ?>
                
            </li>
        <?php endforeach ?>
    </ul>


    <form action="/names" method="POST">
        Title <input type="text" name="title"><br><br>
        Category <input type="text" name="category"><br><br>
        id <input type="number" name="id"><br><br>
        <input type="submit" value="invia"><br>

    </form>
    
<?php require('partials/footer.php'); ?>