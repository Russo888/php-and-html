<html>
	<head>
		<title> DB&PHP test: update</title>
	</head>
	<body>
	<?php
		$idalunno=$_GET["idalunno"];
	
		echo ("<form action='update.php' method='GET' ><br>
			<input type='hidden' name='idalunno' value='$idalunno'>
			Inserire il nome di un alunno:
			<input type='text' name='nome'><br>
			Inserire il cognome di un alunno:
			<input type='text' name='cognome'><br>
			Inserire la data di nascita:
			<input type='date' name='data'><br>
			Classe: ");
			echo("<select name='classe'>");
				$con=mysqli_connect('localhost','a21_sa_russon','nicola','a21_sa_russon') or die('Connessione errata');
				$query= "SELECT * FROM classe";
				$ris=mysqli_query($con,$query);
				echo "<table border>";
				while($rec=mysqli_fetch_array($ris))
				{
				    echo("<option value=$rec[idclasse]>".$rec[anno].$rec[sezione].$rec[specializzazione]."</option>");
				}
				mysqli_close ($con);

			echo("</select><br><br>");
			echo("<input type='submit' value='Invia'>");
	?>
		</form>
	</body>
</html>
