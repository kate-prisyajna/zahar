<?php

echo <<<'EOD'
<pre><b>
2. Дано: ассоциативный массив. Написать функцию arrayReverseKeys($a), которая перевернет ключи этого массива, 
используя минимальное количество циклов. Функция должна возвращать массив как результат.
Пример:
$a = array( ‘a’ => ‘apple’, ‘b’ => ‘banana’, ‘c’ => ‘cherry’);
Результат — ключи идут в обратном порядке:
$a = array( ‘c’ => ‘apple’, ‘b’ => ‘banana’, ‘a’ => ‘cherry’);</b>

----------------------------------------------------------------------------------------------------------------------

Ответ: 

$a=array('a'=>'apple', 'b'=>'banana', 'c'=>'cherry');
function arrayReverseKeys($a)
{
    return array_combine(array_reverse(array_keys($a)), array_values($a));
}

var_dump(arrayReverseKeys($a));

//array_combine — Создаёт новый массив, используя один массив в качестве ключей, а другой для его значений
//array_reverse — Возвращает массив с элементами в обратном порядке
//array_keys — Возвращает все или некоторое подмножество ключей массива
//array_values — Выбирает все значения массива

----------------------------------------------------------------------------------------------------------------------

После выполнения кода:


EOD;

$a=array('a'=>'apple', 'b'=>'banana', 'c'=>'cherry');
function arrayReverseKeys($a)
{
    return array_combine(array_reverse(array_keys($a)), array_values($a));
}

var_dump(arrayReverseKeys($a));