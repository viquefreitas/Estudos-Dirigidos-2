<?php

print "\n ";
print "\n Again, type the first number: ";
$n1 = (float) fgets (STDIN);

print "\n Type the second number: ";
$n2 = (float) fgets (STDIN);

print "\n Type the third number: ";
$n3 = (float) fgets (STDIN);

print "\n Type the fourth number: ";
$n4 = (float) fgets (STDIN);

print "\n Type the fifth number: ";
$n5 = (float) fgets (STDIN);

if ($n1 >= $n2 and $n1 >= $n3 and $n1 >= $n4 and $n1 >= $n5) {
    print "\n The biggest number typped was: $n1 \n\n";
}

elseif ($n2 >= $n1 and $n2 >= $n3 and $n2 >= $n4 and $n2 >= $n5) {
    print "\n The biggest number typped was: $n2 \n\n";
}

elseif ($n3 >= $n1 and $n3 >= $n2 and $n3 >= $n4 and $n3 >= $n5) {
    print "\n The biggest number typped was: $n3 \n\n";
}

elseif ($n4 >= $n1 and $n4 >= $n3 and $n4 >= $n2 and $n4 >= $n5) {
    print "\n The biggest number typped was: $n4 \n\n";
}

elseif ($n5 >= $n1 and $n5 >= $n3 and $n5 >= $n4 and $n5 >= $n2) {
    print "\n The biggest number typped was: $n5 \n\n";
}

