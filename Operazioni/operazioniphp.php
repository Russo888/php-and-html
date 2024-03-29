<?php
$num1=$_GET['numero1'];
$num2=$_GET['numero2'];
$operazione=$_GET['operazioni'];
if ($operazione=='addizione') 
{
  $somma=($num1+$num2);
echo $num1 . " + " . $num2 . " = " . $somma . "<br>";
}
if ($operazione=='sottrazione') 
{
  $sottrazione=($num1-$num2);
echo $num1 . "- " . $num2 . " = " . $sottrazione . "<br>";
}
if ($operazione=='moltiplicazione') 
{
  $moltiplicazione=($num1*$num2);
echo $num1 . " * " . $num2 . " = " . $moltiplicazione . "<br>";
}
if ($operazione=='divisione') 
{
  $divisione=($num1/$num2);
echo $num1 . " / " . $num2 . " = " . $divisione . "<br>";
}

?>
