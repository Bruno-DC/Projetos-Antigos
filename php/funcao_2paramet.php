<HTML>
<HEAD>
 <TITLE>Documento PHP</TITLE>
</HEAD>
<BODY>
<?
  function iogurtera ($sabor,$tipo = "azeda")
{
    return "Fazendo uma ta�a de $sabor $tipo.\n";
}
echo iogurtera ("framboesa");   // n�o funciona como esperado

?>
</BODY>
</HTML>
