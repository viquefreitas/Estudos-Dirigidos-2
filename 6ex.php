<?php

// Faça um algoritmo que inclua três números e mostre o maior deles.

print "\n Hi, type a first number: ";
 $n1 = (float) fgets (STDIN);

print "\n Type a second number: ";
 $n2 = (float) fgets (STDIN);

print "\n Type a third number: ";
 $n3 = (float) fgets (STDIN);

if ($n1 >  $n2 and $n1 > $n3) {
    print "\n The biggest number is: $n1 \n\n";
}


elseif ($n2 >  $n1 and $n2 > $n3) {
    print "\n The biggest number is: $n2 \n\n";
}


elseif ($n3 >  $n1 and $n3 > $n2) {
    print "\n The biggest number is: $n3 \n\n";
}

else{
    print "\n Two or more number are the same. \n\n";
}