<HTML>
<HEAD>
 <TITLE>Documento PHP</TITLE>
</HEAD>
<BODY>
<?
  function cafeteira ($tipo = "cappuccino")
{
    return "<BR>Fazendo uma xícara de café $tipo.\n";
}
echo cafeteira ();
echo cafeteira(null);
echo cafeteira ("expresso");

?>
</BODY>
</HTML>
