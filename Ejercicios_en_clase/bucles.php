<?php
// For
for ($i = 0; $i < 5; $i++) {
echo $i. " ";
}
// While
$x = 1;
while ($x <= 3) { echo $x++; }
// Foreach (ideal para arrays)
$frutas = ["manzana", "pera", "uva"]; foreach ($frutas as $fruta) {
echo $fruta . "\n";
}
?>