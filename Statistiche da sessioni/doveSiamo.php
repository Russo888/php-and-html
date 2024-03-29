<?php
session_start();
echo "Dove Siamo". "<br>";

$contatoreDoveSiamo = $_SESSION['contDoveSiamo'];
$contatoreDoveSiamo=$contatoreDoveSiamo+1;

echo "<a href='pagina principale.php'>Pagina principale</a>". "<br>";

?>
