<?php
include 'header.php';
$statementAuthors=$pdo->query("select * from authors");

$authors=$statementAuthors->fetchAll(PDO::FETCH_ASSOC);

echo"<pre>";
var_dump($authors);
echo"</pre>";

foreach($authors as $author){ ?>
    Prenom - Nom: 
    <a href="detail.php?id=<?=$author['id']?>">
       <?=$author['name']?>
    </a>-<a href="detail.php?id=<?=$author['id']?>"><?=$author['surname']?></a>
    -<a href="delete-a.php?id=<?=$author['id']?>">supprimer</a><br>
    
    <?php
    }
