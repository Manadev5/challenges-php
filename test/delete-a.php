<?php
include 'header.php';

$id = $_GET['id'];

$pdo -> exec("DELETE FROM authors WHERE id = $id");

header('Location: authors.php');
