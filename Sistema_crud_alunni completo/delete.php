<html>
	<head>
		<title>DB & PHP test: DELETE</title>
	</head>
	<body>
	<?php
		$alunno=$_GET["alunno"];
		$connection = mysqli_connect ('localhost','a21_sa_russon','nicola','a21_sa_russon');
		$query = "DELETE FROM Alunni WHERE idalunno = '$alunno'";
		$result = mysqli_query ($connection, $query) ;
		echo "L'alunno &egrave; stato eliminato dal database";
		mysqli_close ($connection) ;
	?><br><br>
	<form action="elenco.php">
 		<button type="submit">
  	 		visualizza elenco
 		</button>  
	</form>
	</a>
	</body>
	</html>
