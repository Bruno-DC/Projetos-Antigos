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

  function soma($x,$y){ //Dentro da função posso usar variaveis diferentes das que serão mostradas
    $r=$x+$y;                 // fora da função;
  echo "<br>A soma é: $r";
  }
    function subtracao($n1,$n2){
      $r=$n1-$n2;
    echo "<br>A subtração é: $r";
    }
      function divisao($a,$b){
        $r=$a/$b;
      echo "<br>A divisão é: $r";
      }
        function multiplicacao($var1,$var2){
          $r=$var1*$var2;
        return "<br>A multiplicação é: $r";
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
                         echo "Opção invalida";
            }

?>
</BODY>
</HTML>
