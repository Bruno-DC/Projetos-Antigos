<HTML>
<HEAD>
 <TITLE>Documento PHP</TITLE>
</HEAD>
<BODY>
<?
  function cafeteira ($tipo = "cappuccino")
{
    return "<BR>Fazendo uma x�cara de caf� $tipo.\n";
}
echo cafeteira ();
echo cafeteira(null);
echo cafeteira ("expresso");

?>
</BODY>
</HTML>
