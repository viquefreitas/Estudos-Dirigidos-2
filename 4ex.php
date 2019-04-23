<?php

 // Faça um algoritmo que verifique se uma letra digitada é vogal ou consoante.

print "\n Type a letter: ";
$l = (string) fgetc (STDIN);

if ($l == 'a' or $l == 'e' or $l == 'i' or $l == 'o' or $l == 'u' or 
    $l == 'A' or $l == 'E' or $l == 'I' or $l == 'O' or $l == 'U' ) {
    
    print "\n The letter $l is a vowel. \n\n";
}

else {
    print "\n The letter $l is a consonant.  \n\n";
}