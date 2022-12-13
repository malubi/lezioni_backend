<?php 
$eta = 15;
if ($eta >= 18) {
    $maggiorenne = true;
}else {
    $maggiorenne = false;
}

if ($maggiorenne) {
    echo "puoi entrare";
}else {
    echo "non puoi entrare";
}

echo "<hr>";
//oppure
$eta = 13;

echo "Tu ". ($eta >= 18) ? "puoi entrare" : "non puoi entrare";
?>