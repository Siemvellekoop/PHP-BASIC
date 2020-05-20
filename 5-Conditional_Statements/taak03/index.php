<!DOCTYPE html>
<html>
<body>

<?php

$variabele1 = 10;
$variabele2 = 6;

if($variabele1 == $variabele2) {
    echo "gelijk";
}
if($variabele1 != $variabele2) {
    echo "ongelijk";
}
if($variabele1 === $variabele2) {
    echo "identiek";
}
if($variabele1 > $variabele2) {
    echo "$variabele1 is groter dan. $variabele2";
}
if($variabele1 < $variabele2) {
    echo "$variabele1 is kleiner dan. $variabele2";
}
if($variabele1 >= $variabele2) {
    echo "$variabele1 is groter of gelijk aan. $variabele2";
}
if($variabele1 <= $variabele2) {
    echo "$variabele1 is kleiner of gelijk aan. $variabele2";
}

?>
</body>
</html>