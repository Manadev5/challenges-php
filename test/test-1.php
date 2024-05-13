<?php

$pdo = new \PDO('mysql:host=localhost;dbname=category', 'root', 'manasse22');

// 2 . Requete 
$statement=$pdo->query("select * from category");


// 3 . Recupere
$category=$statement->fetchAll(PDO::FETCH_ASSOC);

var_dump($category);


foreach($category as $oneCategory){ ?>
Documentaire : 
<a href="detail.php?id=<?=$oneCategory['id']?>">
   <?=$oneCategory['Documentary']?>
</a><br>

<?php
}

?>

<?php
foreach($category as $oneCategory){ ?>
Horror : 
<a href="test-1.php?id=<?=$oneCategory['id']?>">
   <?=$oneCategory['Horror']?>
</a><br>

<?php
}

?>
<?php

foreach($category as $oneCategory){ ?>
    Roman : 
    <a href="test-1.php?id=<?=$oneCategory['id']?>">
        <?=$oneCategory['roman']?>
    </a><br>

    
    <?php
    }
    ?>

    <?php

foreach($category as $oneCategory){ ?>
    Comedie : 
    <a href="test-1.php?id=<?=$oneCategory['id']?>">
        <?=$oneCategory['comedie']?>
    </a><br>
    
    <?php
    }

