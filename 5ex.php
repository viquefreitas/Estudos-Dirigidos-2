<?php

// Faça um algoritmo para uma leitura de duas notas parciais de um aluno. O programa deve calcular uma média alcançada por aluno e apresentar:
// Uma mensagem "Aprovado", uma média alcançada para maior ou igual a sete;
// Uma mensagem "Reprovado", uma média para menor do que sete;
// Uma mensagem "Aprovado com Distinção", uma média por igual a dez.

print "\n Yo, type the first note: ";
$n1 = (float) fgets (STDIN);

print "\n Type the second note: ";
$n2 = (float) fgets (STDIN);

$media = ($n1 + $n2) /2 ;

if ($media == 10) {
    print "\n Approved with dinstinction. \n\n";
}

elseif ($media >= 7) {
    print "\n Approved. \n\n";
}

else {
    print "\n Repproved. \n\n";
}