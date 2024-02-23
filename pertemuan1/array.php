<?php

//
// associative array
// multidimensional array

    // $fruits = ["mangga", "Delima", "Durian", "manggis"];

    // foreach($fruits as $fruit) {
    //     echo $fruit;
    //     echo '<br>';
    // }


    // $dinos = [
    //     "dinoName"=> "Tricera",
    //     "dinoage"=> 300,
    //     "isMarried"=> "false"
    // ];

    // foreach ($dinos as $dino) {
    //     echo $dino;
    //     echo '<br>';
    // }

    $dinos=[
    [
            "dinoName"=> "Tricera",
            "dinoAge"=> 300
    
    ],
    [
        "dinoName"=> "Rex",
        "dinoAge"=> 500
    ],
    [
        "dinoName"=> "ptera",
        "dinoAge"=> 250
    ],
    
];

 foreach ($dinos as $dino) {
    echo $dino["dinoName"] ."-" .$dino["dinoAge"]. "Tahun";
    echo '<br>';
}
?>