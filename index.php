<?php

require("functions.php");
// require("router.php");


$dsn = "mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4";
$pdo = new PDO($dsn, 'root');
$statement = $pdo->prepare("select * from posts");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

dd($posts);
