<?php
include 'header.php';

$statement = $pdo->prepare("INSERT INTO category (id, Documentary, Horror, roman, comedie) VALUES (:id, :doc, :horror, :roman, :comedie)");
$statement->bindParam(':id', $_POST['id'], PDO::PARAM_STR);
$statement->bindParam(':doc', $_POST['doc'], PDO::PARAM_STR);
$statement->bindParam(':horror', $_POST['horror'], PDO::PARAM_STR);
$statement->bindParam(':roman', $_POST['roman'], PDO::PARAM_STR);
$statement->bindParam(':comedie', $_POST['comedie'], PDO::PARAM_STR);
$statement->execute();

header('location: category.php');

