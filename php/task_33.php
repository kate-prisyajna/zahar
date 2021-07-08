<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задание 33</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head>
<body>

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

<?php

$int=323;
$sum = 0;
while ($int != 0) {
    $sum +=$int % 10;
    $int = intdiv($int, 10);
}

echo $sum;

?>

</body>
</html>

