<?php

echo <<<'EOD'
<pre><b>
28) В переменной $year можно задать значение года в диапазоне от 0 до 9999. 
Определить, является ли год, заданный в $year високосным.</b>
    
----------------------------------------------------------------------------------------------------------------------

Ответ: 

$year=2021;

if ($year % 4 == 0) {
    echo "$year это високосный год \n";
} else {
    echo "$year это обычный год \n";
}

----------------------------------------------------------------------------------------------------------------------

После выполнения кода:


EOD;

$year=2021;

if ($year % 4 == 0) {
    echo "$year это високосный год";
} else {
    echo "$year это обычный год";
}