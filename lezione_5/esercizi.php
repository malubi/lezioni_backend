<?php
//1.
/* può votare? data l'età di una persona vedere se può votare*/
//2
/* Dato un numero che potrebbe essere 5, dire se è positivo, negativo o zero.*/

$age=26;

if($age >= 18) {
    echo "Puoi votare!";
} 
elseif ($age >= 25){
    echo "daje";

}
else {
    echo "Non puoi votare.";
}

echo "<hr>"; 

$number= -5;
if($number > 0) {
    echo "numero positivo.";
}
elseif ($number == 0) {
    echo "Il numero è pari a zero.";
}

else {
    echo "il numero è negativo.";
}
?>