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

// come cambiare il valore di una variabile all'interno di una funzione
// facendo attenzione allo scoped

 function laMiaFunzione($prova1){
    $prova1 = 'Ivan Zazzaroni';
    return $prova1;
 }

$soluzione = laMiaFunzione($prova1);

echo $soluzione;
?>