<?php

print "\n Here we go again! ";
print "\n First number: ";
$n1 = (float) fgets (STDIN);

print "\n Second number: ";
$n2 = (float) fgets (STDIN);

print "\n Third number: ";
$n3 = (float) fgets (STDIN);

if ($n1 >=  $n2 and $n1 >= $n3 and $n2 >= $n3) {
    print "\n $n1 \n";
    print " $n2 \n";
    print " $n3 \n \n";
}

elseif ($n1 >=  $n2 and $n1 >= $n3 and $n3 >= $n2) {
    print "\n $n1 \n";
    print " $n3 \n";
    print " $n2 \n \n";
}


elseif ($n2 >=  $n1 and $n2 >= $n3 and $n1 >= $n3) {
    print "\n $n2 \n";
    print " $n1 \n";
    print " $n3 \n \n";
}

elseif ($n2 >=  $n1 and $n2 >= $n3 and $n3 >= $n1) {
    print "\n $n2 \n";
    print " $n3 \n";
    print " $n1 \n \n";
}

elseif ($n3 >=  $n1 and $n3 >= $n2 and $n2 >= $n1) {
    print "\n $n3 \n";
    print " $n2 \n";
    print " $n1 \n \n";
}

elseif ($n3 >=  $n1 and $n3 >= $n2 and $n1 >= $n2) {
    print "\n $n3 \n";
    print " $n1 \n";
    print " $n2 \n \n";
}