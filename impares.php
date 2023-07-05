<?php
echo "Bem vindo ao programa ímpares" .PHP_EOL;
echo "*******************************" . PHP_EOL;

for($i = 1; $i <= 100; $i++ ) {
        if(($i%2) != 0)
        echo "#$i" . PHP_EOL;
}

echo "*******************************" . PHP_EOL;