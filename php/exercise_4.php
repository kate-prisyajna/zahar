<?php

echo <<<'EOD'
<pre><b>
4. Найти элемент предыдущий перед максимальным по величине в массиве. (с сортировкой и без).</b>

----------------------------------------------------------------------------------------------------------------------

Ответ: 


$arr=array(0=>1.2, 1=>3, 2=>-3.2, 4=>1.34, 5=>-0.3, 6=>1.2, 7=>5.3, 8=>0.67);

echo ">Массив без сортироваки:";
foreach ($arr as $key=>$value) {
    print "Ключ=$key | Значение=$value";
}
array_pop($arr);

echo "Предпоследний елемент: ";
print_r(end($arr));

echo "Массив с сортировкой:";
natsort($arr);
foreach ($arr as $key=>$value) {
    print "Ключ=$key | Значение=$value";
}
array_pop($arr);

echo "Предпоследний елемент: ";
print_r(max($arr));

----------------------------------------------------------------------------------------------------------------------

После выполнения кода:


EOD;

$arr=array(0=>1.2, 1=>3, 2=>-3.2, 4=>1.34, 5=>-0.3, 6=>1.2, 7=>5.3, 8=>0.67);

echo "<br>Массив без сортироваки:<br>";
foreach ($arr as $key=>$value) {
    print "Ключ=$key | Значение=$value<br>";
}
array_pop($arr);

echo "<br>Предпоследний елемент: ";
print_r(end($arr));

echo "<br><br>Массив с сортировкой:<br>";
natsort($arr);
foreach ($arr as $key=>$value) {
    print "Ключ=$key | Значение=$value<br>";
}
array_pop($arr);

echo "<br>Предпоследний елемент: ";
print_r(max($arr));




