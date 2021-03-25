<HTML>
<HEAD>
 <TITLE>Documento PHP</TITLE>
</HEAD>
<BODY>
<?
  recursion(2);
function recursion($a)
{
    if ($a < 20) {
        echo "$a<BR>";
        recursion($a+2);
    }
}

?>
</BODY>
</HTML>
