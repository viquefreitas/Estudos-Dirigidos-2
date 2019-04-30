<?php

//Faça um programa que peça 10 números inteiros, calcule e mostre a quantidade de números pares e a
//quantidade de números impares.

$par=0;
$impar=0;
$vezes=1;

do {print "Type a number: ";
    $n = (float) fgets(STDIN);
    
    if ($n%2==0)
    {$par++;}
    
    if ($n%2!=0)
    {$impar++;} 
    $vezes++;}  
    
    while($vezes<=10);
    
print "Amount of odd numbers : $impar\nAmount of pairs numbers: $par \n";
