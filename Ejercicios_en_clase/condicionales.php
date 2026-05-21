<?php
$edad = 20;
if ($edad >= 18) {
echo "Eres mayor de edad";
} elseif ($edad >= 13) {
echo "Eres adolescente";
} else {
echo "Eres menor de edad";
}
// Operador ternario
$estado = ($edad >= 18) ? "Mayor": "Menor";
?>