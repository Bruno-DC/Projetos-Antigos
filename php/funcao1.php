<HTML>
<HEAD>
 <TITLE>Documento PHP</TITLE>
</HEAD>
<BODY>
<?
function foo()
{
  function bar()
  {
    echo "Eu n�o existo at� foo() ser chamada.\n";
  }
}
foo();

bar();

?>
</BODY>
</HTML>
