<?php
$a = 100;
echo 'Простые числа от 1 до 100:'; 

for ($x = 2; $x <= $a; $x++) 
{
    $p = true;

for ($b = 2; $b <= sqrt($x); $b++) 
  {
    if ($x % $b === 0) {
    $p = false;
    break;
    }
  }
if ($p) {
    echo $x . ',';
}

}