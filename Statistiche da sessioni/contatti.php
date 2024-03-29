<?php
session_start();
echo "Contatti". "<br>";

$contatoreContatti = $_SESSION['contContatti'];
$contatoreContatti=$contatoreContatti+1;

echo "<a href='pagina principale.php'>Pagina principale</a>". "<br>";

?>
