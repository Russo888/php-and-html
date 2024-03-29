<html>
	<head>
		<title> DB&PHP test: INSERT</title>
	</head>
	<body>
	<?php
		echo("<form action='ricerca.php' method='GET' ><br>
			Inserire il nome di un alunno:
			<input type='text' name='nome'><br>
			Inserire il cognome di un alunno:
			<input type='text' name='cognome'><br>
			Inserire l'anno di nascita:
			<input type='number' name='data'><br>
			Classe: ");
			echo("<select name='classe'>");
			echo"<option value=''></option>";
				$con=mysqli_connect('localhost','a21_sa_russon','nicola','a21_sa_russon') or die('Connessione errata');
				$query= "SELECT * FROM classe";
				$ris=mysqli_query($con,$query);
				while($rec=mysqli_fetch_array($ris))
				{
				    echo("<option value=$rec[idclasse]>".$rec[anno].$rec[sezione].$rec[specializzazione]."</option>");
				}
				mysqli_close ($con);
			echo("</select><br><br>");
			
			echo("<input type='submit' value='Cerca'>");
	?>
		</form>
	</body>
</html>
