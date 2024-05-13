<!DOCTYPE html>
<html>
    <head>
        <meta charset="=UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
            <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="header.php">LIBRARY</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="books.php">Books</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="authors.php">Authors</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="category.php">Categories</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="form.php">Formulaire</a>
        </li>
        </ul>
    </body>
</html>

<?php

$pdo = new \PDO('mysql:host=localhost;dbname=category', 'root', 'manasse22');


