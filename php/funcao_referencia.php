<HTML>
<HEAD>
 <TITLE>Documento PHP</TITLE>
</HEAD>
<BODY>
<?
  function mais5(&$num1, $num2) {
	 $num1 += 5;
	 $num2 += 5;

 }
$a = $b = 1;

mais5($a, $b);
echo("a = $a, b = $b");

mais5($a, &$b);
echo("<BR>a = $a, b= $b");
?>
</BODY>
</HTML>
