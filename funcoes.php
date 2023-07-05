<?php
function saque($conta, $valor){
    if($valor > $conta["saldo"]){
        mensagem("Você não possui saldo suficiente!");
    }else{
        $conta['saldo'] -= $valor;
    }
    return $conta;
}
function deposito(array $conta, float $valor){
    if($valor > 0 ){
        $conta['saldo'] += $valor;
    }else{
        mensagem("Seu deposito deve ter um valor positivo!");
    }
    return $conta;
}

function mensagem($msg){
    echo $msg.PHP_EOL .'<br>';
}

function letrasMaiusculas($conta){
   return $conta['titular'] = strtoupper($conta['titular']);
}

function exibeContas(array $conta){
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li> Titular:{$titular}. Saldo:{$saldo}</li>";
}