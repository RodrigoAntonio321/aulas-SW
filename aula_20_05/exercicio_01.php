<?php

$vetor = ['Jan','Fer','Mar','Abr','Mai','Jun','Jul','Ago','Set','Non','Out','Dez'];
$num = 45 ;
$mes = $num-1;

if(($mes >= 0) || ($mes <=11)){

echo "o mês é $vetor[$mes]"; 
};
else{
    echo "tá engraçadim";
};



?>