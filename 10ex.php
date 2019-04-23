<?php
print "\n BASKHARA ^^ ";
print "\n Give the value of A: ";
    $a = (float) fgets(STDIN);

    if ($a == 0) {
        print "\n Isn´t baskhara, because A = 0. \n \n";
    }

    else {
        print "\n Give the value of B: ";
            $b = (float) fgets(STDIN);

        print "\n Give the value of C: ";
             $c = (float) fgets(STDIN);

            $delta = (float) pow($b,2) - 4 * $a * $c;  // pow() e ** --> exponênciação -> pow(base, expoente); 

        if ($delta < 0) {
            print "\n The equation has no roots, because 'Delta' is a negative number. ( Delta = $delta ). \n \n";
        }
              $x1 = (-$b + sqrt($delta)) / (2*$a);       //sqrt() serve para raiz quadrada 
                $x2 = (-$b - sqrt($delta)) / (2*$a);
                
       if ($delta == 0) {
            print "\n If Delta = 0, the equation has just one real root. Being, equal to: x = $x1 \n \n";
        }

       if ($delta > 0) {
            print "\n Because 'Delta' be positive, the equation has two real roots. Being, equal to: \n \n";
            print " Delta = $delta \n";
            print " X1 = $x1 \n";
            print " X2 = $x2 \n \n";
        }     
    }