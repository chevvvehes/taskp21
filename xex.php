<?php
$x = (int)readline('введите число:');
$fact = 1;
$d = 1;
while ($d <= $x) {
    $fact *= $d;
    $d++;
}
echo ('Факториал числа:' . $fact);
