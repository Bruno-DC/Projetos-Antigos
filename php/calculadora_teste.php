<HTML>
<HEAD>
 <TITLE>Documento PHP</TITLE>
</HEAD>
<BODY>
<?
    if (isset($_POST["a"]) && isset($_POST["b"])){
   $a = $_POST["a"];
   $b = $_POST["b"];
   }

  function soma($x,$y){ //Dentro da fun��o posso usar variaveis diferentes das que ser�o mostradas
    $r=$x+$y;                 // fora da fun��o;
  echo "<br>A soma �: $r";
  }
    function subtracao($n1,$n2){
      $r=$n1-$n2;
    echo "<br>A subtra��o �: $r";
    }
      function divisao($a,$b){
        $r=$a/$b;
      echo "<br>A divis�o �: $r";
      }
        function multiplicacao($var1,$var2){
          $r=$var1*$var2;
        return "<br>A multiplica��o �: $r";
        }
          switch ($op){
                 case 1:
                        soma($a,$b);
                        break;
                 case 2:
                        subtracao($a,$b);
                        break;
                 case 3:
                        divisao($a,$b);
                        break;
                 case 4:
                        echo multiplicacao($a,$b);
                        break;
                 default:
                         echo "Op��o invalida";
            }

?>
</BODY>
</HTML>
