<?php
$multi = 0;
$result = 0;
 echo "Bem vindo a tabuada mágica" . PHP_EOL;
 echo "***************************" . PHP_EOL;

 for ($i=1; $i<=9; $i++){
     echo strtoupper("Tabuada de $i"). PHP_EOL;
    while($multi <= 9){
        $result = $i * $multi;
        echo "$i * $multi = $result". PHP_EOL;
        $multi++;
    }

    $multi = 0;
    $result = 0;
    echo "-----------------------------".PHP_EOL;
 }