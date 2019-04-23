<?php

//Faça um algoritmo que peça um valor e mostre na tela se o valor é positivo ou negativo. 

print "\n Give me a number: ";
$v = (float) fgets (STDIN);


if ($v > 0) {
    print "\n The $v is a positive number \n\n";
}

elseif ($v < 0) {
    print "\n The $v is a negative number \n\n";
}

else {
    print "\n O $v is a neutral number  \n\n";
}