<?php
session_start();
echo "Descrizione". "<br>";

$contatoreDescrizione = $_SESSION['contDescrizione'];
$contatoreDescrizione=$contatoreDescrizione+1;

echo "<a href='pagina principale.php'>Pagina principale</a>". "<br>";

?>
