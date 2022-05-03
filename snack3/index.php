<?php
// Snack 3
// Creare un array con 15 numeri casuali, 
// tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
$arrayNumeri = [];
for($i = 0; count($arrayNumeri) < 15; $i++){
    $number = rand(1,100);
    if(!in_array($number, $arrayNumeri)){
        $arrayNumeri[]= $number;
    }  
}
echo('<pre>');
var_dump($arrayNumeri);
echo('</pre>');
?>
<!-- Soluzione While
while(count($arrayNumeri) < 15) -->

