<HTML>
<HEAD>
 <TITLE>Documento PHP</TITLE>
</HEAD>
<BODY>
<?
  function par_impar($num)
{
   if($num%2==0){
    return "$num e par";}
    else{
    return "$num e impar";}
}
echo par_impar(15);
?>
</BODY>
</HTML>
