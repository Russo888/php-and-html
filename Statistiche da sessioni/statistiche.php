<?php
session_start();
echo "Statistiche";

$contatoreProdotti = $_SESSION['contProdotti'];
$contatoreContatti = $_SESSION['contContatti'];
$contatoreDescrizione = $_SESSION['contDescrizione'];
$contatoreDoveSiamo = $_SESSION['contDoveSiamo'];

echo "Entrate nelle pagine:". "<br>";
echo "Prodotti:". $contatoreProdotti. "<br>";
echo "Contatti:". $contatoreContatti. "<br>";
echo "Descrizione:". $contatoreDescrizione. "<br>";
echo "Dove Siamo:". $contatoreDoveSiamo. "<br>";

echo "<a href='pagina principale.php'>Pagina principale</a>". "<br>";


?>
