<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задание 4</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head>
<body>

<pre><b>
4) Что будет, если сравнить две переменные, почему?
		$var1 = 4;
		$var2 = '4';
		var_dump($var1 == $var2);
		var_dump($var1 === $var2);</b>
		
----------------------------------------------------------------------------------------------------------------------<br/>

Ответ: 

var_dump($var1 == $var2);
Переменные равны (true), так как переменные равны после преобразования типов.
var_dump($var1 === $var2);
Переменные не равны (false), так как переменные тождественно не равны, у них разный тип.

----------------------------------------------------------------------------------------------------------------------<br/>

После выполнения кода:

<?php

$var1 = 4;
$var2 = '4';

var_dump($var1 == $var2);
var_dump($var1 === $var2);

?>

</body>
</html>