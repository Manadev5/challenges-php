<?php
include 'header.php';

$statement=$pdo->query("select * from category");


$category=$statement->fetchAll(PDO::FETCH_ASSOC);



echo"<pre>";
var_dump($category);
echo"</pre>";
?>

<?php

foreach($category as $oneCategory){ ?>
    Documentaire : 
    <a href="detail.php?id=<?=$oneCategory['id']?>">
       <?=$oneCategory['Documentary']?>
    </a>-<a href="delete.php?id=<?=$oneCategory['id']?>">supprimer</a><br> 
    
    <?php
    }

foreach($category as $oneCategory){ ?>
    Horror : 
    <a href="detail.php?id=<?=$oneCategory['id']?>">
    <?=$oneCategory['Horror']?>
    </a>-<a href="delete.php?id=<?=$oneCategory['id']?>">supprimer</a><br>
    
    
    <?php
    }

foreach($category as $oneCategory){ ?>
    roman : 
    <a href="detail.php?id=<?=$oneCategory['id']?>">
    <?=$oneCategory['roman']?>
    </a>-<a href="delete.php?id=<?=$oneCategory['id']?>">supprimer</a><br>
   
    
    <?php
    }

foreach($category as $oneCategory){ ?>
    comedie : 
    <a href="detail.php?id=<?=$oneCategory['id']?>">
    <?=$oneCategory['roman']?>
    </a>-<a href="delete.php?id=<?=$oneCategory['id']?>">supprimer</a><br>
    
    
    <?php
    }










