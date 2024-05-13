<?php
include 'header.php';

$statementBooks = $pdo->prepare("INSERT INTO book (name , pubblication_date) VALUES (:name, :date) ");
$statementBooks->bindParam(':name', $_POST['name'], PDO::PARAM_STR);
$statementBooks->bindParam(':date', $_POST['date'], PDO::PARAM_STR);
$statementBooks->execute();

header('location: books.php');