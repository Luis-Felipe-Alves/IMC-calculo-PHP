<?php

$altura = 1.72;
$peso = 86;

$imc = $peso/$altura**2;
echo "Seu IMC é $imc." .PHP_EOL;

if($imc < 18.5){
    echo "Tu tá fino. Coma mais!" . PHP_EOL;
}

else if($imc >= 25){ 
    echo"Tá gordo! Fecha a boca." . PHP_EOL;
}
else {
    echo "Continue lindo!" . PHP_EOL;
}
