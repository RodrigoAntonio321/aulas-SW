
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>

    <style>
     h1{
         color:blue;

     }
  
        p{
        color:red;

        }


    </style>


</head>
<body>

<h1>Este é o site que apresenta a média</h1>


<?php
$num1 = $_REQUEST['num1'];

$num2 = $_REQUEST['num2'] ;

$num3 = $_REQUEST['num3'];

$soma = $num1 + $num2 + $num3;

$media = $soma / 3;

echo "<p> A media é: $media </p>";

?> 



</body>
</html>



