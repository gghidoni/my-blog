<?php 

$message = "";

if($app['database']->checkUsername($_POST['username'])){

    $message = 'Username not available!';
    // $message['id'] = 0;    

} else {

    $app['database']->insert('authors', [

        'username' => $_POST['username'],
        'password' => $_POST['password']
    
    ]
    );
    
    $message = "Welcome, {$_POST['username']}.";
    // $message['id'] = 1;
}



require 'views/welcome.view.php';

