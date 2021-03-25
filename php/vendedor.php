<HTML>
  <HEAD>
    <TITLE>Documento PHP</TITLE>
  </HEAD>
    <BODY>
<?
  $total=1000;$avista=false;
  //Calcular o valor com desconto se for a vista.
    if ($avista){
    $porc=($total*10)/100;
    $t_pagar=$total-$porc;
      echo "O total da compra foi:$total Reais";
      echo "<br>o total a pagar com 10% de desconto é:$t_pagar reais";

  //Calcula a comissao do vendedor.
    $comissao=($t_pagar*5)/100;
      echo "<br><blink>A comissão do vendedor é:$comissao reais</blink>";}

  //Se não for avista calcula o valor das parcelas.
    else{
    $parc=($total/3);
      echo "O total da compra foi:$total Reais";
      echo "<br>o valor de cada parcela é:$parc";

  //Calcula a comissao do vendedor.
    $comissao=($total*5)/100;
      echo "<br><blink>A comissao do vendedor é:$comissao reais</blink>";}

?>
    </BODY>
</HTML>
