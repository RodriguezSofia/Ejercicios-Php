<?php
// Definición de función
function saludar ($nombre = "Mundo") { return "¡Hola," . $nombre . "!"; }
// Llamado
echo saludar ("SENA");
echo saludar();
// ¡Hola, SENA!
// ¡Hola, Mundo!
// Función con tipo de retorno (PHP 7+)
function suma (int $a, int $b): int {
return $a + $b;
}
?>