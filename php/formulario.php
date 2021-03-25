<html>
 <head>
<title>Aprendendo PHP</title>
</head>
 <body>
<?php
if (isset($_POST["texto"])){
   $texto = $_POST["texto"];
      if($texto != ""){
      echo "Você digitou \"$texto\"<br><br>";
      }
 }
?>
<form method="post" action="formulario.php">
      <input type="text" name="texto" value="" size=20><br>
<input type="submit" name="sub" value="Enviar!">
 </form>
 </body>
 </html>

