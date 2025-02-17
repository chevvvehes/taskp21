<?php
echo 'Таблица умножения от 1 до 10:';
echo PHP_EOL;
for($a = 1; $a <= 10; $a++)
{
    for($b = 1; $b <= 10; $b++)
    {
        echo $a ," * ", $b ," = ", $a * $b, PHP_EOL;
    }
    echo PHP_EOL;
}
