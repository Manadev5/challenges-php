<?php

function writeSecretSentences(string $param1,string $param2): string{

    return "$param1 s'incline à $param2";
}

echo writeSecretSentences('poulet', 'lion');