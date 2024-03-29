<html>
<?php
$con=mysqli_connect('localhost','a21_sa_russon','nicola','a21_sa_russon') or die('Connessione errata');
$query= "SELECT * FROM Alunni, classe WHERE Alunni.idclasse=classe.idclasse";
$ris=mysqli_query($con,$query);
echo "<table border>";
while($rec=mysqli_fetch_array($ris))
{
    #inizio tabella
    echo "<tr>";
    #nome
    echo "<td> $rec[nome] </td>"; 
    #cognome
    echo "<td> $rec[cognome] </td>";
    #datadinascita
    echo "<td> $rec[datadinascita] </td>";  
    echo "<td> $rec[anno]$rec[sezione]$rec[specializzazione] </td>"; 
    #elimina
    echo "<td><form action='delete.php' method='GET'><br>";
    echo "<button type='submit'value=$rec[idalunno] name='alunno'>";
    echo "<img src='cestino.jpg'>";
    echo "</button> ";
    echo "</form></td>";
    #modifica
    echo "<td><form action='mod.php' method='GET'><br>";
    echo "<button type='submit'value=$rec[idalunno] name='idalunno'>";
    echo "<img src='matita.png'>";
    echo "</button> ";
    echo "</form></td>";
    #fine tabella
    echo "</tr>";
}
echo "</table>";
?>
<br>
	<form action="add.php">
 		<button type="submit">
  	 		Aggiungi un alunno
 		</button>
	</form>
	
	<form action='formRicerca.php' method='GET'>
	    <button type='submit'">
	    	<img src='lente.jpg'>
	    </button> 
	</form>
	
	</body>
</html>
