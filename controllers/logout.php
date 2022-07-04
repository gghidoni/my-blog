<?php 

session_start();
unset($_SESSION['idAuthor']);
unset($_SESSION['username']);
unset($_SESSION['password']);



header('Location: /');

?>