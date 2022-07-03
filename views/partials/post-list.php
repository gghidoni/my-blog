
<ul><?php  ?>
    
        <?php foreach($listPosts as $post) : ?>
            <li>
                <a href="/post-<?php echo $post->idPost; ?>">
                    <span><?= $post->titlePost;  ?></span>
                    <span>||</span>
                    <span><?= $post->datePost;  ?></span> 
                    <span>||</span>
                    <span>by <?= $post->username;  ?></span> 
                </a>

            </li>
        <?php endforeach ?>

</ul>