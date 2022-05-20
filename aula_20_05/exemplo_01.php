<?php

 $teste = [10,'oi',1.6, true];
 //echo $teste[1];
$qtde = count($teste);

echo "numero de elementos = $qtde";
echo "<hr>";

for($i = 0; $i < $qtde; $i++){
    echo "valor do i = $i - Valor: $teste[$i]";
    echo "<br>";
};
 echo "<hr>";

 $numqua = (rand(1,10))/10;
 echo $numqua;
 echo "<hr>";

$vetor = [1,5,8,10,6];
$sus = count($vetor);
$soma = 0;
for($i2 = 0; $i2 < $sus; $i2++){
$soma = $soma + $vetor[$i2];
echo "a soma será  =  $soma";
echo "<br>";
};
$media = $soma/5;
echo "a media é $media";

echo "<hr>";

?> 
