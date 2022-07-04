<?php require('partials/head.php'); ?>


<h3>Login</h3>

<form method="POST" action="/login-author">
    Username: <input type="text" name="username">
    Password: <input type="password" name="password">
    <input type="submit" value="Login">
</form>


<h3>If you do not have an account, please register</h3>

<form method="POST" action="/new-author">
    Username: <input type="text" name="newUsername">
    Password: <input type="password" name="newPassword">
    <input type="submit" value="Register">
</form>


    


    
<?php require('partials/footer.php'); ?>