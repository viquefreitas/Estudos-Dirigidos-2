<?php

 // Faça um algoritmo que verifique se uma letra digitada é "F" ou "M". Conforme a letra: F - Feminino, M - Masculino, Sexo Inválido.
 
print "\n Type the letter [F] or [M]: ";
$s = (string) fgetc (STDIN);

if ($s == 'M') {
    print "\n $s is male. \n\n";
}

elseif ($s == 'F') {
    print "\n $s is female. \n\n";
}

else {
    print " \n Invalid \n\n";
}