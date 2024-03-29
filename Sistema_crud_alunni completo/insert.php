<html>
	<head>
		<title> DB& PHP test: INSERT</title>
	</head>
	<body>
	<?php
	$nome =$_GET["nome"];
	$cognome = $_GET["cognome"];
	$data = $_GET["data"];
	$classe = $_GET["classe"];
	$connection = mysqli_connect ('localhost','a21_sa_russon','nicola','a21_sa_russon');
	$query = "INSERT INTO Alunni VALUES (NULL, '$cognome', '$nome', '$data', '$classe') ";
	$result = mysqli_query ($connection, $query) ;
	echo "L'alunno $nome &egrave; stato aggiunto al database! ";
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
