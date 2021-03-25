<HTML>
<HEAD>
 <TITLE>Documento PHP</TITLE>
</HEAD>
<BODY>
<?
  $i=1;

    while($i<=10){

    if ($i%2==0){
       echo "<br><font color='red'></font>";}
    else{
       echo "<br><font color='blue'><font>";}
       echo "$i++";
   }


?>
</BODY>
</HTML>
