<?php

$message1 = '0@sn9sirppa@#?ia`jgtvryko1';
$message2 = 'q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj';
$message3 = 'aopi?sgnirts@#?sedhtg+p9l!';

$lenght = strlen($message1);
$lenght2 = strlen($message2);
$lenght3 = strlen($message3);

$lenghtKey = $lenght / 2;
$lenghtKey2 = $lenght2 / 2;
$lenghtKey3 = $lenght3 / 2;

$subString = substr($message1, 6, $lenghtKey);
$subString2 = substr($message2, 6, $lenghtKey2);
$subString3 = substr($message3, 6, $lenghtKey3);

$wordReplace = str_replace('@#?', ' ', $subString);
$wordReplace2 = str_replace('@#?', ' ', $subString2);
$wordReplace3 = str_replace('@#?', ' ', $subString3);

$finalWord = strrev($wordReplace);
$finalWord2 = strrev($wordReplace2);
$finalWord3 = strrev($wordReplace3);



echo $finalWord . ' ' . $finalWord2 . ' ' . $finalWord3;
