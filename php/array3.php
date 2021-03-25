<HTML>
<HEAD>
 <TITLE>Documento PHP</TITLE>
</HEAD>
<BODY>
<?
  $arr = array(5 => 1, 12 => 2);
$arr[] = 56;   // Isto é o mesmo que $arr[13] = 56;
$arr["x"] = 42;// Isto acrescenta um novo elemento
                      // para o array com a chave "x"
print_r($arr);
unset($arr[5]); // Isto remove um elemento do array
print_r($arr);
unset($arr);    // E isto apaga todo o array
?>
</BODY>
</HTML>
