<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ЗАДАЧА 4</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head>
<body>

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

<?php

$arr=[1,5,8,7,6,3,21];

echo "<br><b>Массив без сортироваки:</b><br>";
foreach ($arr as $key=>$value) {
    print "Ключ=$key | Значение=$value<br>";
}
array_pop($arr);

echo "<br><b>Предпоследний елемент: </b>";
print_r(end($arr));

$arr=[1,5,8,7,6,3,21];
echo "<br><br><b>Массив с сортировкой:</b><br>";
natsort($arr);
foreach ($arr as $key=>$value) {
    print "Ключ=$key | Значение=$value<br>";
}
array_pop($arr);

echo "<br><b>Предпоследний елемент: </b>";
print_r(max($arr));

?>

</body>
</html>




