<?php
  session_start();
  $_SESSION["acquisti"][$_GET["prodotti"]]=$_GET["numeri"];
?>
<html>
<body>
<?php
  echo "Inserito: ".$_GET["prodotti"]." ".$_GET["numeri"]." pezzi<br>";
?>
<a href="inserimento.html">Nuovo inserimento</a><br>
<a href="lista.php">Visualizza lista</a>
</body>
</html>
