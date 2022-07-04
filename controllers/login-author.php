<?php 


$author = $app['database']->login($_POST['username']);



if(count($author) === 0) {

    $message = 'Wrong username! <a href="login"><< Back</a>';

} else {

    if (!password_verify($_POST['password'], $author["password"])) {
        $message = 'Wrong password! <a href="login"><< Back</a>';
    
    } else {

        session_start();

        //Save user id in session
        $_SESSION['idAuthor'] = $author["idAuthor"];
        $_SESSION['username'] = $author["username"];

        $message = "Welcome, {$_SESSION['username']}.";

    }

    require 'views/welcome.view.php';


}






