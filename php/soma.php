<HTML>
<HEAD>
 <TITLE>Documento PHP</TITLE>
</HEAD>
<BODY>
<?
  $a=25;$soma=0;
    for($a=25;$a<=100;$a++){
      if ($a%2==0){
        $soma=$soma+$a; }
    }
        echo '<br>' .$soma;

?>
</BODY>
</HTML>
