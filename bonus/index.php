<?php
// Snack Bonus
// Creare un array contenente qualche alunno di un’ipotetica classe. 
// Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
// Stampare Nome, Cognome e la media dei voti di ogni alunno.
$alunniClasse = [
    [
        "nome" => "Stefano",
        "cognome" => "Piotada",
        "voti" =>[
            8,
            7,
            8,
            10,
            8,
            9
        ],
    ],

    [
        "nome" => "Luca",
        "cognome" => "Vitullo",
        "voti" =>[
            7,
            5,
            9,
            10,
            8,
            7
        ],
    ],

    [
        "nome" => "Erik",
        "cognome" => "Schievenin",
        "voti" =>[
            7,
            6,
            7,
            8,
            6,
            6
        ],
    ],

    [
        "nome" => "Ciro",
        "cognome" => "Cusati",
        "voti" =>[
            8,
            9,
            7,
            8,
            9,
            7
        ],
    ],

    [
        "nome" => "Lorenzo",
        "cognome" => "Ariatta",
        "voti" =>[
            6,
            8,
            7,
            6,
            7,
            7
        ],
    ],

];

for($i = 0; $i < count($alunniClasse); $i++){
    $key = $alunniClasse[$i];
    $mediaVotoDecimale = array_sum($key['voti']) / count($key['voti']);
    $mediaVotoIntero = intval($mediaVotoDecimale);
    echo('<h2> Alunno: </h2>');
    echo('<h3>'. $key['nome']. ''. $key['cognome'].' | '. 'media voto: '.  $mediaVotoIntero .'</h3>');
}


?>