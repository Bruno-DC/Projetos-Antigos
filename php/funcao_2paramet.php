<HTML>
<HEAD>
 <TITLE>Documento PHP</TITLE>
</HEAD>
<BODY>
<?
  function iogurtera ($sabor,$tipo = "azeda")
{
    return "Fazendo uma taça de $sabor $tipo.\n";
}
echo iogurtera ("framboesa");   // não funciona como esperado

?>
</BODY>
</HTML>
