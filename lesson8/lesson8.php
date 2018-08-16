<?php
session_start();
$email = 'vardas.pavarde@pastas.lt';
$password = '123';

if (isset($_SESSION['ar prisijunge']) && $_SESSION['ar prisijunge'] === true) {
    echo 'Prisijungęs';
    include '';
    exit;
}
if(isset($_POST['enter_password']) && $_POST['user_name'] == $email
 && $_POST['password'] == $password) {

    echo '<h1>VISKAS GERAI</h1>';

} else {
    if (empty($_POST)) {
?>
<h1>Please login</h1>
<form action="lesson8.php" method="POST">
User name: <br>
<input type="text" name="user_name"><br>
Password: <br>
<input type="password" name="password"><br>
<input type="submit" name='enter_password' value="login"><br>
</form>
<?php

} else {
?>
<h1>Please login</h1>
<form action="lesson8.php" method="POST">
User name: <br>
<input type="text" name="user_name"><br>
Password: <br>
<input type="password" name="password"><br>
<input type="submit" name='enter_password' value="login"><br>
</form>
<h2>Klaidingas vartotojo vardas arba slaptažodis</h2>
<?php
}
}