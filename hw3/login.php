<?php
include_once 'db.php';
include_once 'test.php';
$log = $_GET['login'];
$res = mysqli_query($connection, "SELECT * FROM users where login = $log" );
$post = mysqli_fetch_assoc($res);
print_r($post);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>

<form action="" method="get">
    <input type="text" name="login" placeholder="login">
    <input type="password" name="password" placeholder="password">
    <button type="submit">Login</button>
</form>

</body>
</html>
