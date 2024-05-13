<?php
include 'header.php';

$id = $_GET['id'];

$pdo -> exec("DELETE FROM category WHERE id = $id");

header('Location: category.php');




