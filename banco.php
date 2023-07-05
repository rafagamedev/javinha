<?php

require 'funcoes.php';
$contasCorrentes = [
    73456209110 =>['titular' => 'Rafinha',
    'saldo' => 300],
    73456209111 =>['titular' => 'Bromelia',
    'saldo' => 700],
    73456209112 =>['titular' => 'Carlim',
    'saldo' => 1000],
];

$contasCorrentes[73456209112] = saque($contasCorrentes[73456209112] , 300);
$contasCorrentes[73456209110] = deposito($contasCorrentes[73456209110], 1200);
$contasCorrentes[73456209110]['titular'] = (letrasMaiusculas($contasCorrentes[73456209110]));

echo "<ul>";
foreach($contasCorrentes as $cpf => $contas){
    exibeContas($contas);
}
echo "</ul>";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Clientes do banco</h1>
    <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt><h3>
            <?= $conta['titular']; ?> 
            -
            <?= $cpf; ?>
        </h3></dt>
        <dd>
            Saldo: <?= $conta['saldo'] ?>
        </dd>
        <?php } ?>
</body>
</html>