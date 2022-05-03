<?php
// Snack 1
// Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
// Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
// Stampiamo a schermo tutte le partite con questo schema.
// Olimpia Milano - Cantù | 55-60
$partiteBasket=[
    [
        'squadraCasa' => 'Los Angeles Lakers',
        'squadraOspite' => 'Milwaukee Bucks',
        'puntiCasa' => '120',
        'puntiOspiti' => '115'
    ],
    [
        'squadraCasa' => 'Cleveland Cavaliers',
        'squadraOspite' => 'Boston Celtics',
        'puntiCasa' => '98',
        'puntiOspiti' => '103'
    ],
    [
        'squadraCasa' => 'Miami Heat',
        'squadraOspite' => 'New York Knicks',
        'puntiCasa' => '80',
        'puntiOspiti' => '95'
    ],
    [
        'squadraCasa' => 'Houston Rockets',
        'squadraOspite' => 'Oklahoma City Thunder',
        'puntiCasa' => '90',
        'puntiOspiti' => '75'
    ],
    [
        'squadraCasa' => 'Brooklyn Nets',
        'squadraOspite' => 'Toronto Raptors',
        'puntiCasa' => '88',
        'puntiOspiti' => '89'
    ],
];

for($i = 0; $i < count($partiteBasket); $i++ ){
    $singoloMatch = $partiteBasket[$i];
    echo('<h2>' . $singoloMatch['squadraCasa']. ' - ' . $singoloMatch['squadraOspite'].' | '. $singoloMatch['puntiCasa'] .' - ' . $singoloMatch['puntiOspiti'] .'</h2>');
}
?>
