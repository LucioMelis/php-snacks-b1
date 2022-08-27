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
?>