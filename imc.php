<?php
$imc = 0;
$peso = 74;
$altura = 1.70;
echo "Bem-vindo ao calculo maravilha do IMC!" . PHP_EOL;
echo "".PHP_EOL;
$imc = $peso / ($altura ** 2);

if($imc <= 18.5){
    echo "Seu IMC é: $imc, isso indica baixo peso!" . PHP_EOL;
}elseif($imc <= 24.99){
    echo "Seu IMC é: $imc, isso indica peso normal!" . PHP_EOL;
}elseif($imc <= 29.99){
    echo "Seu IMC é: $imc, isso indica sobrepeso!" . PHP_EOL;
}else{
    echo "Seu IMC é: $imc, isso indica obesidade!" . PHP_EOL;
}