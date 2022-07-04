<?php 

session_start();

// unset all Session variables
unset($_SESSION['idAuthor']);
unset($_SESSION['username']);
unset($_SESSION['password']);



header('Location: /');

?>