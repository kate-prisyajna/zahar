<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задание 22</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head>
<body>

<pre><b>
22) Условные операторы if, else, if:

Создать переменную $age  и присвоить ей произвольное числовое значение.
Написать конструкцию if, которая выводит фразу: "Вам ещё батрачить и батрачить", если значение $age будет от 18 до 59 включительно
(Использовать знак больше или равно, а также меньше или равно).
Расширить конструкцию if, выводя фразу: "Хорош пахать", если $age больше 59.
Расширить конструкцию if-else, выводя фразу: "Мал, еще работать - иди учись!", если $age от 1 до 17 включительно (Использовать знак строго больше, а также строго меньше).
Дополнить конструкцию if-elseif, выводя фразу: "Ты паранормален!", если $age не попадает ни в один диапазон.
</b>
----------------------------------------------------------------------------------------------------------------------

Ответ: 

$age = 6;

		if ($age >= 18 && $age <=59) {
		    echo 'Вам ещё батрачить и батрачить' . "\n";
		} else if ($age > 59) {
		    echo 'Хорош пахать' . "\n";
		} else if ($age > 1 && $age < 17) {
		    echo 'Мал, еще работать - иди учись!' . "\n";
		} else {
		    echo 'Ты паранормален!' . "\n";
		}

----------------------------------------------------------------------------------------------------------------------

После выполнения кода:

<?php

$age = 6;

if ($age >= 18 && $age <=59) {
    echo 'Вам ещё батрачить и батрачить' . "\n";
} else if ($age > 59) {
    echo 'Хорош пахать' . "\n";
} else if ($age > 1 && $age < 17) {
    echo 'Мал, еще работать - иди учись!' . "\n";
} else {
    echo 'Ты паранормален!' . "\n";
}

?>

</body>
</html>