<?php

//Faça um programa que peça dois números, base e expoente, calcule e mostre o primeiro número elevado
//ao segundo número. Não utilize a função de potência da linguagem.

print "Type a number for the base: ";
$base=(int) fgets(STDIN);

print "Type a number for the exponent: ";
$expo=(int) fgets(STDIN);

$potencia = 1;
$vbase = $base;

for ($i=1; $i<=$expo; $i++){ 
    $potencia=$potencia*$vbase;
}

print "Solution = $potencia\n";
