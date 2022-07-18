<?php

include_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    print_r($_POST);
    $title = $_POST['title'];
    $content = $_POST['content'];
    $sql = "INSERT INTO posts(title, content) VALUES ('$title', '$content');";
   echo $sql;
   print_r($_POST);
   $login = $_POST['login'];
   $password = $_POST['password'];
   $sql = "INSERT INTO users(login, password) VALUES ('$login', '$password');";
  echo $sql;
   mysqli_query($connection, $sql);
}

