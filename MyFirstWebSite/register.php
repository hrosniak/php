<!DOCTYPE html>
<html>
<head>
    <title>My first PHP website</title>
</head>
<body>
<h2>Registration Page</h2>
<a href="mainPage.php">Click here to go back</a><br/><br/>
<form action="register.php" method="post">
    Enter Username: <input type="text" name="username" required="required"/><br/>
    Enter Password: <input type="password" name="password" required="required"/><br/>
    <input type="submit" value="Register"/>
</form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = ($_POST['username']);
    // mysql_real_escape_string już nie jest wspierany, wystarczy usunąć daną frazę i leci zapis
    $password = ($_POST['password']);

    echo "Username entered is: ". $username . "<br />";
    echo "Password entered is: ". $password;
}
?>