<HTML>
  <HEAD>
    <TITLE>Documento PHP</TITLE>
  </HEAD>
    <BODY>
<?php
  $a=10;$b=10;$c=6;
    echo "verificando se as arestas formam um triangulo<br>";
  if(($a<($b+$c))&&($b<($a+$c))&&($c<($a+$b))){
    echo "<br>� um tri�ngulo";
  if(($a==$b)&&($b==$c)){
    echo "<br>Tri�ngulo EQUIL�TERO";}
  elseif(($a==$b)||($a==$c)||($b==$c)){
    echo "<br>Tri�ngulo IS�CELES";}
  elseif(($a!=$b)&&($b!=$c)){
    echo "<br>Tri�ngulo ESCALENO";}
  }
  else{
    echo "Estas arestas n�o formam um tri�ngulo";
    }

?>
    </BODY>
</HTML>
