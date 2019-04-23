<?php

print "\n Bro, type the price of the first product: R$";
    $p1 = (float) fgets (STDIN);

print "\n Type the price of the second product: R$";
    $p2 = (float) fgets (STDIN);

print "\n Type the price of the third product: R$";
    $p3 = (float) fgets (STDIN);

if ($p1 <=  $p2 and $p1 <= $p3) {
    print "\n You should buy the product whose value is: R$$p1 because is cheaper.\n";
}

elseif ($p2 <=  $p1 and $p2 <= $p3) {
    print "\n You should buy the product whose value is: R$$p2 because is cheaper.\n";
}

elseif ($p3 <=  $p1 and $p3 <= $p2) {
    print "\n You should buy the product whose value is: R$$p3 because is cheaper.\n";
}