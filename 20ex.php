<?php

//Faça um algoritmo que imprima as seguintes figuras geométricas:

$a=8;
$b=8;

for ($h=0; $h<$a; $h++)
{for($l=1; $l<$b; $l++)
    print "* ";
    print "\n";}
    
 for ($h=0; $h<8; $h++)
    {for($l=-1; $l<$h; $l++)
        print "* ";
        print "\n";}
        for ($h=0; $h<8; $h++)
        {for($l=-1; $l<$h; $l++)
            print "* ";
            print "\n";}
