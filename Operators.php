<?php
$a = 20;
$b = 10;

// Arithmetic Operators
echo "<h3>Arithmetic Operators</h3>";
echo "$a + $b = " . ($a + $b) . "<br>";
echo "$a - $b = " . ($a - $b) . "<br>";
echo "$a * $b = " . ($a * $b) . "<br>";
echo "$a / $b = " . ($a / $b) . "<br>";
echo "$a % $b = " . ($a % $b) . "<br>";

// Comparison Operators
echo "<h3>Comparison Operators</h3>";
echo "$a == $b: " . ($a == $b ? "true" : "false") . "<br>";
echo "$a != $b: " . ($a != $b ? "true" : "false") . "<br>";
echo "$a > $b: " . ($a > $b ? "true" : "false") . "<br>";
echo "$a < $b: " . ($a < $b ? "true" : "false") . "<br>";
echo "$a >= $b: " . ($a >= $b ? "true" : "false") . "<br>";
echo "$a <= $b: " . ($a <= $b ? "true" : "false") . "<br>";

// Logical Operators
echo "<h3>Logical Operators</h3>";
echo "($a > 0 && $b > 0): " . (($a > 0 && $b > 0) ? "true" : "false") . "<br>";
echo "($a > 0 || $b < 0): " . (($a > 0 || $b < 0) ? "true" : "false") . "<br>";
echo "!($a == $b): " . (!($a == $b) ? "true" : "false") . "<br>";
?>
