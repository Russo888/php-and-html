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
	$query= "SELECT * FROM Alunni, classe
		WHERE Alunni.idclasse=classe.idclasse
		AND Alunni.nome LIKE \"%$nome%\"
		AND Alunni.cognome LIKE \"%$cognome%\"
		AND Alunni.datadinascita LIKE \"%$data%\"
		AND classe.idclasse=1";
	$ris=mysqli_query($connection,$query);
	echo "<table border>";
	while($rec=mysqli_fetch_array($ris))
	{
	    #inizio tabella
	    echo "<tr>";
	    #cognome
	    echo "<td> $rec[cognome] </td>";
	    #nome
	    echo "<td> $rec[nome] </td>"; 
	    #data   
	    echo "<td> $rec[datadinascita] </td>"; 
	    echo "<td> $rec[anno]$rec[sezione]$rec[specializzazione] </td>"; 
	    #fine tabella
	    echo "</tr>";
	}
?>
<br><br>
<form action="elenco.php">
 		<button type="submit">
  	 		visualizza elenco
 		</button>  
	</form>
</body>
</html>
