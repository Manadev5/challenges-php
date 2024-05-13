<?php
include 'header.php';

$id = $_GET['id'];

$pdo -> exec("DELETE FROM book WHERE id = $id");



header('Location: books.php');
