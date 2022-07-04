<?php 

/* 
this file is called by the logout button on the navbar, 
the session variables are unsetted
*/

session_start();

// unset all Session variables
unset($_SESSION['idAuthor']);
unset($_SESSION['username']);
unset($_SESSION['password']);



header('Location: /');

?>