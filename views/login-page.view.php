<?php require('partials/head.php'); ?>


<h1>Register</h1>

<form method="POST" action="/new-author">
    Username: <input type="text" name="username">
    Password: <input type="password" name="password">
    <input type="submit" value="Invia">
</form>

<h1>Login</h1>

<form action="/login-author">
    Username: <input type="text" name="username">
    Password: <input type="password" name="password">
    <input type="submit" value="Invia">
</form>


    


    
<?php require('partials/footer.php'); ?>