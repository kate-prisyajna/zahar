<?php

echo <<<'EOD'
<pre><b>
33) Выведите cумму всех цифр в числе $int.
* Используйте цикл while или do while</b>

----------------------------------------------------------------------------------------------------------------------

Ответ: 

$int=323;
$sum = 0;
while ($int != 0) {
    $sum +=$int % 10;
    $int = intdiv($int, 10);
}

echo $sum;

----------------------------------------------------------------------------------------------------------------------

После выполнения кода:

EOD;

$int=323;
$sum = 0;
while ($int != 0) {
    $sum +=$int % 10;
    $int = intdiv($int, 10);
}

echo $sum;

