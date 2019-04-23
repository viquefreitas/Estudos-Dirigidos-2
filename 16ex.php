<?php

print "\n Nhaaaaaa, let's go: ";
print "\n Type the first number: ";
 $n1 = (float) fgets (STDIN);

print "\n Type the second number: ";
 $n2 = (float) fgets (STDIN);

print "\n Type the third number: ";
 $n3 = (float) fgets (STDIN);

print "\nType the fourth number: ";
 $n4 = (float) fgets (STDIN);

print "\n Type the fifth number: ";
 $n5 = (float) fgets (STDIN);

$soma  = $n1 + $n2 + $n3 + $n4 + $n5;
 $media = $soma / 5;

print "\n The sum between 5 numbers is: $soma \n";
print "\n The average between 5 numbers is : $media \n \n";
