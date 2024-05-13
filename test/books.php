<?php
include 'header.php';
$statementBook = $pdo->query("SELECT * from book");

$books = $statementBook->fetchAll(PDO::FETCH_ASSOC);

var_dump($books);



foreach ($books as $book) { ?>
    Nom et date de pubblication du livre:
    <a href="detail.php?id=<?= $book['id'] ?>">
        <?= $book['name'] ?>
    </a> - <a href="detail.php?id=<?= $book['id'] ?>"><?= $book['pubblication_date'] ?></a>
    -<a href="delete-b.php?id=<?= $book['id'] ?>">supprimer</a><br><br>

<?php
}
