<?php require('partials/head.php'); ?>

<!---- Posts List section   ---->
<?php require('partials/post-list.php'); ?>


<!---- Add new post section   ---->

<?php if(isset($_SESSION['username'])) { ?>

    <h3>inserimento post</h3>

<?php } ?>


    


    
<?php require('partials/footer.php'); ?>