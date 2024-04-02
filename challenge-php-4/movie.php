<?php

$movies = ['l\'ile au tresor', 'Le club du suicide', 'Doctor jekyll'];

$actors =['Jan Rabson', 'Anatoly Kolok', 'Vitaly vasilikov', 
        'Eddie lizard', 'Simon callaw', 'Robin maeve', 'Ashab akarov',
        'Oleg dahi', 'Elena tsyplakova'
];

$moviesAndActors['l\'ile au tresor'] = ['Jan Rabson', 'Anatoly Kolok', 'Vitaly vasilikov'];
$moviesAndActors ['Le club du suicide'] = ['Eddie lizard', 'Simon callaw', 'Robin maeve'];
$moviesAndActors ['Doctor jekyll']  = ['Ashab akarov','Oleg dahi', 'Elena tsyplakova'];

foreach($moviesAndActors as $key => $values){

    echo "{$key}". implode(',', $values);

}

