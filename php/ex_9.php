<HTML>
<HEAD>
 <TITLE>Documento PHP</TITLE>
</HEAD>
<BODY>
<?
  //criando um array normal
  $arr=array("foo"=>"bar",12=>true);
    echo '<br>'.$arr["foo"];//bar
    echo '<br>'.$arr[12].'<br>';//1
    $array=array(1,2,3,4,5);
    print_r($array);
?>
</BODY>
</HTML>
