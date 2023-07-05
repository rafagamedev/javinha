<?php
$notas = [10, 8, 9, 7];
$pokemons = [
        [
            'nome' => 'Pikachu',
            'poder' => 15
        ],
        [
            'nome' => 'Charmander',
            'poder' => 17
        ],
        [
            'nome' => 'Bulbasauro',
            'poder' => 12
        ]
    ];

function ordenar($var1, $var2):int{
    if($var1['poder'] > $var2['poder']){
        return -1;
    }
    if($var1['poder'] < $var2['poder']){
        return 1;
    }
    return 0;
}
usort($pokemons, 'ordenar');

var_dump($pokemons);