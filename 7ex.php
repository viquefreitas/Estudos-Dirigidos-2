<?php

print "\n Hi again, you already know type the first number: ";
$n1 = (float) fgets (STDIN);

print "\n the second: ";
$n2 = (float) fgets (STDIN);

print "\n the third: ";
$n3 = (float) fgets (STDIN);

if ($n1 >  $n2 and $n1 > $n3 and $n2 >$n3) {
    print "\n The biggest number is: $n1 \n";
    print " The smaller number is: $n3 \n\n";
}

elseif ($n1 >  $n2 and $n1 > $n3 and $n3 > $n2) {
    print "\n The biggest number is: $n1 \n";
    print " The smaller: $n2 \n\n";
}


elseif ($n2 >  $n1 and $n2 > $n3 and $n1 > $n3) {
    print "\n The biggest number is: $n2 \n";
    print " The smaller number is: $n3 \n\n";
}

elseif ($n2 >  $n1 and $n2 > $n3 and $n3 > $n1) {
    print "\n The biggest number is: $n2 \n";
    print " The smaller number is: $n1 \n\n";
}

elseif ($n3 >  $n1 and $n3 > $n2 and $n2 > $n1) {
    print "\n The biggest number is: $n3 \n";
    print " The smaller number is: $n1 \n\n";
}

elseif ($n3 >  $n1 and $n3 > $n2 and $n1 > $n2) {
    print "\n The biggest number is: $n3 \n";
    print " The smaller number is: $n2 \n\n";
}

else {
    print "\n Two or tree numbers are the same. \n\n";
}

print "\n GOODBYE HONEY. \n\n";