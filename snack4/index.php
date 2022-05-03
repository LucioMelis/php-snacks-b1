<?php
// Snack 4
// Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
// Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
$paragrafo = 'Guarda come dondolo,guarda come dondolo con il twist. Con le gambe ad angolo, con le gambe ad angolo. Baaaaaallo il twist. Sarà perchè io dondolo.';
$paragrafoSeparato = explode('.',$paragrafo);
echo('<h1>Titolo della Canzone: Guarda come dondolo</h1>');
for($i= 0; $i < count($paragrafoSeparato); $i++){
    echo('<p>' . $paragrafoSeparato[$i] . '</p>');
}
?>