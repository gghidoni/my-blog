<?php 

session_start();

// initialized message
$message = "";

// check if username already existing
if($app['database']->checkUsername($_POST['newUsername'])){

    $message = 'Username not available! <a href="login"><< Back</a>';    

} else {
    
    // register new author
    $app['database']->insert('authors', [

        'username' => $_POST['newUsername'],
        'password' => password_hash($_POST['newPassword'], PASSWORD_DEFAULT)
    
    ]
    );
    
    // welcome message
    $message = "Welcome {$_POST['newUsername']}, your account has been created. Please <a href='login'>Login >></a>";
}



require 'views/welcome.view.php';

