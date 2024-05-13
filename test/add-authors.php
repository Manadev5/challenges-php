<?php
include 'header.php';

$statementAuthors = $pdo->prepare("INSERT INTO authors (name , surname) VALUES (:name, :surname) ");
$statementAuthors->bindParam(':name', $_POST['name'], PDO::PARAM_STR);
$statementAuthors->bindParam(':surname', $_POST['surname'], PDO::PARAM_STR);
$statementAuthors->execute();

header('location: authors.php');
