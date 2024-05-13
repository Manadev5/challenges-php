<?php

include 'header.php';


$statement=$pdo->query("select * from category where id=$_GET[id]");
$statementBook = $pdo->query("SELECT * from book");

$books = $statementBook->fetch(PDO::FETCH_ASSOC);


?>
<h1><?= $books['name']?> </h1>