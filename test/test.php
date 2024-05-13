<?php

$category =[
  "roman",
  "documentaire",
  "horreur",
  "comedie"
];

foreach($category as $key => $value){ ?>
<a href= "test.php?category=<?=$key ?>"><?=$value?></a>
<?php
}
?>
vous etes sur la categorie n° <?=$_GET['category'] ?>
correspondat à <?= $category[$_GET['category']] ?>



