<HTML>
<HEAD>
 <TITLE>Documento PHP</TITLE>
</HEAD>
<BODY>
<?
  $n=1;$soma=0;
    for($n=1;$n<=500;$n++){
      if (($n%2)!=0){

      if (($n%3)==0){
          $soma=$soma+$n;}
        }
     }
        echo '<br>' .$soma;
?>
</BODY>
</HTML>
