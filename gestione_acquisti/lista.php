<?php
  session_start();
?>
<html>
<body>
Lista:<br>
<?php
  foreach($_SESSION["acquisti"] as $prod => $quantita) 
  {
    echo $prod." ".$quantita." pezzi<br />";
    $totpezzi = $totpezzi + $quantita;
    if($quantita>$maxpezzi) 
    {
       $maxpezzi = $quantita;
       $prodmax = $prod;
    }
  }
  echo "<br /><b>Totale pezzi:</b> ".$totpezzi."<br />";
  echo "<b>Max pezzi:</b> ".$prodmax." ".$maxpezzi." pezzi<br />";
?>
</body>
</html>

