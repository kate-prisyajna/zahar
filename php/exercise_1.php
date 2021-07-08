<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ЗАДАЧА 1</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head>
<body>

<pre><b>
1. Дано массив целых чисел $a, отсортированный по возрастанию, и некое число $b. Написать функцию searchInArray($a, $b), 
которая максимально быстро определит, есть ли в массиве искомый элемент и вернет TRUE или FALSE.</b>

----------------------------------------------------------------------------------------------------------------------

Ответ: 

function searchInArray(array $a, $b)
{

    foreach ($a as $value) {
        if ($b === $value) {
            return true;
        }
    }
    return false;
}

var_dump(searchInArray([4, 77, 8, 5, 8, 8, 99], 5));

----------------------------------------------------------------------------------------------------------------------

После выполнения кода:

<?php

function searchInArray(array $a, $b)
{

    foreach ($a as $value) {
        if ($b === $value) {
            return true;
        }
    }
    return false;
}

var_dump(searchInArray([4, 77, 8, 5, 8, 8, 99], 5));

?>

</body>
</html>

