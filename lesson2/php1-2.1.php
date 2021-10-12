<?php

/*1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные
значения. Затем написать скрипт, который работает по следующему принципу:
a. если $a и $b положительные, вывести их разность;
b. если $а и $b отрицательные, вывести их произведение;
c. если $а и $b разных знаков, вывести их сумму;
ноль можно считать положительным числом.*/

$a = rand(-1000, 1000);
$b = rand(-1000, 1000);

echo "a = $a<br>b = $b<br>";

if ($a >= 0 && $b >= 0) {
    echo "a - b = " . ($a - $b);
} elseif ($a < 0 && $b < 0) {
    echo "a * b = " . ($a * $b);
} else {
    echo "a + b = " . ($a + $b);
}