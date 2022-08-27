<?php

$animals = [
    "mammals" => ["cow", "pig", "horse", "dog"],
    "birds" => ["duck", "chicken"]
];

foreach($animals as $animalClass){
    foreach ($animalClass as $animal) {
        echo (' ' . $animal);
    }
}

$animals['mammals'][] = 'lion';
$animals['person'] =['Ciro','Siox'];

var_dump($animals);


$prova1 = 'Ivan';
$prova2 = 'Paolo';

 function laMiaFunzione($saluto, $bacio){
    echo $prova1; /*variabile non valida */
    echo $saluto;
    echo $bacio;
 }

laMiaFunzione($prova1, $prova2);
?>