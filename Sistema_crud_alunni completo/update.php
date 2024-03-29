<html>
	<head>
		<title> DB& PHP test: INSERT</title>
	</head>
	<body>
	<?php
	$idalunno=$_GET["idalunno"];
	$nome =$_GET["nome"];
	$cognome = $_GET["cognome"];
	$data = $_GET["data"];
	$classe = $_GET["classe"];
	$connection = mysqli_connect ('localhost','a21_sa_russon','nicola','a21_sa_russon');
	$query = ("UPDATE Alunni SET cognome='$cognome', nome='$nome', datadinascita='$data', idclasse='$classe' WHERE idalunno=$idalunno");
	$result = mysqli_query ($connection, $query) ;
	echo "L'alunno $nome &egrave; stato modificato nel database! ";
	mysqli_close ($connection) ;
?>
<br><br>
<form action="elenco.php">
 		<button type="submit">
  	 		visualizza elenco
 		</button>  
	</form>
</body>
</html>
