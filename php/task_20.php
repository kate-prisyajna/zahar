<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задание 20</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head>
<body>

<pre><b>
20) Разработать функцию вычисления факториала заданного числа (n!).</b>

----------------------------------------------------------------------------------------------------------------------

Ответ: 

        $var=5;              //Переменная от которой вычисляем факториал c помощью рекурсии - вызов функции внутри функции
        function factorial($k): int
        {
            if ($k == 0)
                return 1;
            $n=1;
            for ($i=1; $i <= $k; $i++) {
                $n*=$i;
            }
            return $n;
        }
        
        echo "$var! = " . factorial($var) . "\n";
        
        
        $var=3;          //Переменная от которой вычисляем факториал c помощью цыкла
        function factorial2($n): int
        {
            if ($n == 0)
                return 1;
            else return $n * factorial2($n - 1);
        }
        
        echo "$var! = " . factorial2($var) . "\n";

----------------------------------------------------------------------------------------------------------------------

После выполнения кода:

<?php

$var=5;
function factorial($k): int
{
    if ($k == 0)
        return 1;
    $n=1;
    for ($i=1; $i <= $k; $i++) {
        $n*=$i;
    }
    return $n;
}

echo "$var! = " . factorial($var) . "\n";


$var=3;
function factorial2($n): int
{
    if ($n == 0)
        return 1;
    else return $n * factorial2($n - 1);
}

echo "$var! = " . factorial2($var) . "\n";

?>

</body>
</html>