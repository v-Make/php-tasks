<?php
session_start();

$email=$_POST['email'];
$password=$_POST['password'];

$password=password_hash($password, PASSWORD_DEFAULT);
$pdo= new PDO("mysql:host=localhost;dbname=my_project;","root","");

$sql="SELECT*FROM users WHERE email=:email";

$statement=$pdo->prepare($sql);
$statement->execute(['email' => $email]);
$task=$statement->fetch(PDO::FETCH_ASSOC);

if(!empty($task)) {
    $message="Этот эл адрес уже занят другим пользователем(";
    $_SESSION['danger']=$message;
    header("Location:/task_11.php");
    exit;
}

$sql="INSERT INTO users(email,password) VALUES (:email,:password)";
$statement=$pdo->prepare($sql);
$statement->execute(['email' => $email,'password' => $password]);

$message="Этот эл. адрес успешно добавлен в таблицу!";
$_SESSION['success']=$message;

header("Location:/task_11.php");