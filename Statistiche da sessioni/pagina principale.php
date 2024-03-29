<?php
session_start();



$contatoreProdotti=0;
$contatoreContatti=0;
$contatoreDescrizione=0;
$contatoreDoveSiamo=0;


$_SESSION['contProdotti'] = $contatoreProdotti;
$_SESSION['contContatti'] = $contatoreContatti;
$_SESSION['contDescrizione'] = $contatoreDescrizione;
$_SESSION['contDoveSiamo'] = $contatoreDoveSiamo;



echo "<a href='prodotti.php'>Prodotti</a>". "<br>";
echo "<a href='contatti.php'>Contatti</a>". "<br>";
echo "<a href='descrizione.php'>Descrizione</a>". "<br>";
echo "<a href='doveSiamo.php'>Dove siamo</a>". "<br>";
echo "<a href='statistiche.php'>Statistiche</a>". "<br>";	

?>
