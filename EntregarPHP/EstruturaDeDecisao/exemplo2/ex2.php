<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular.php</title>
</head>
<body>
    <br>
<?php
 $A = $_POST['txtb'];
 $B = $_POST['txtb'];
  $soma = $A + $B;
  echo "A soma dos valores é " .$soma .'<br>';
  if ($soma>10){
  echo '<font color="blue">'. "Soma maior que dez".'</font>';
  }
  else{
     echo '<font color="red">'. "Soma menor que dez ".'</font>';
  }
?>

</body>
</html>