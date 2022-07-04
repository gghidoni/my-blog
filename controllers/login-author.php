<?php 

// get Author info from table
$author = $app['database']->login($_POST['username']);


// if the query did not find a matching user
if(count($author) === 0) {

    $message = 'Wrong username! <a href="login"><< Back</a>';

//if the query found a matching user
} else {

    // check password
    if (!password_verify($_POST['password'], $author["password"])) {
        $message = 'Wrong password! <a href="login"><< Back</a>';
    
    } else {

        // start session
        session_start();

        //Save user and id in session variables
        $_SESSION['idAuthor'] = $author["idAuthor"];
        $_SESSION['username'] = $author["username"];

        $message = "Welcome, {$_SESSION['username']}.";

    }

    require 'views/welcome.view.php';


}






