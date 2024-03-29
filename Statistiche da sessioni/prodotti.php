<?php
session_start();
echo "Prodotti: ". "<br>";

$contatoreProdotti = $_SESSION['contProdotti'];
$contatoreProdotti=$contatoreProdotti+1;

echo $contatoreProdotti. "<br>";
echo "<a href='pagina principale.php'>Pagina principale</a>". "<br>";

?>
