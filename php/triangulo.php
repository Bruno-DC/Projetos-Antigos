<HTML>
  <HEAD>
    <TITLE>Documento PHP</TITLE>
  </HEAD>
    <BODY>
<?php
  $a=10;$b=10;$c=6;
    echo "verificando se as arestas formam um triangulo<br>";
  if(($a<($b+$c))&&($b<($a+$c))&&($c<($a+$b))){
    echo "<br>É um triângulo";
  if(($a==$b)&&($b==$c)){
    echo "<br>Triângulo EQUILÁTERO";}
  elseif(($a==$b)||($a==$c)||($b==$c)){
    echo "<br>Triângulo ISÓCELES";}
  elseif(($a!=$b)&&($b!=$c)){
    echo "<br>Triângulo ESCALENO";}
  }
  else{
    echo "Estas arestas não formam um triângulo";
    }

?>
    </BODY>
</HTML>
