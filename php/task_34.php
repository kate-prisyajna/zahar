<?php

echo <<<'EOD'
<pre><b>
34) Назовите пары ключ\значение в массиве $array.
$array = array(FALSE => TRUE, TRUE => FALSE, NULL => array(PHP_OS, "PHP_VERSION"));
* Добавьте значение 'Jeanne d'Arc' в массив NULL.
* Используйте теги pre для структурированного отображения.
* Выведите массив 3-мя различными способами.</b>

----------------------------------------------------------------------------------------------------------------------

Ответ: 


$array=array(FALSE=>TRUE, TRUE=>FALSE, NULL=>array(PHP_OS, "PHP_VERSION"));
$array[NULL][]='Jeanne d\'Arc';

echo "<pre>Первый вариант:";
var_dump($array);

echo "<pre>Второй вариант:";
foreach ($array as $key=>$value) {
    print "<pre>$key:$value";
}
foreach ($array as $version=>$massiv) {
    foreach ($massiv as $inner_key=>$value) {
        echo "<pre>[$version] [$inner_key]  =  $value";
    }
}
echo "<pre>Третий вариант:";
print_r($array);


----------------------------------------------------------------------------------------------------------------------

После выполнения кода:

EOD;

$array=array(FALSE=>TRUE, TRUE=>FALSE, NULL=>array(PHP_OS, "PHP_VERSION"));
$array[NULL][]='Jeanne d\'Arc';

echo "<pre>Первый вариант:";
var_dump($array);

echo "<pre>Второй вариант:";
foreach ($array as $key=>$value) {
    print "<pre>$key:$value";
}
foreach ($array as $version=>$massiv) {
    foreach ($massiv as $inner_key=>$value) {
        echo "<pre>[$version] [$inner_key]  =  $value";
    }
}
echo "<pre>Третий вариант:";
print_r($array);


