<?php
require_once('../Template/header.php');
?>

<H1>Register</H1>
<form action="createUser" method="POST">
        <label>Username</label>
        <input type="text" name="username">
        <label>Password</label>
        <input type="text" name="password">
        <label>Mail</label>
        <input type="text" name="mail">
        <input type="submit" value="Enregistrement">
</form>

<H1>Authentification</H1>
<form action="AuthUser" method="POST">
        <label>Username</label>
        <input type="text" name="username">
        <label>Password</label>
        <input type="text" name="password">
        <input type="submit" value="Connexion">
</form>



<?php
require_once('../Template/footer.php');
?>