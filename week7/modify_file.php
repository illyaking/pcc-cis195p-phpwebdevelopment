<?php

require_once('includes\constants.php');
require_once('includes\utilities.php');

require_secure();

$key = isset($_POST['key']) ? $_POST['key'] : NULL;
$value = isset($_POST['value']) ? $_POST['value'] : NULL;

if (!empty($key) && !empty($value)) {
    update_file(htmlentities($key), password_hash($value, PASSWORD_DEFAULT));
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Example to Modify File</title>
</head>
<body>
<form method="POST" action="modify_file.php">
    <label>User Name: </label><input type="text" name="key"><br>
    <label>Password: </label><input type="password" name="value"><br>
    <input type="submit" name="SUBMIT"><br>
</form>
</body>
</html>
