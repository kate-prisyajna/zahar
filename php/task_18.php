<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задание 18</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head>
<body>

<pre><b>
18) Преобразовать $a="abradсabra" в "abracbra"(удалить символ "d" и третью букву "a").</b>

----------------------------------------------------------------------------------------------------------------------

Ответ: 

$$a = "abradсabra";
		echo str_replace("dсa", "c", $a);

//Функция str_replace — Заменяет все вхождения строки поиска на строку замены (что/на что/количество)

----------------------------------------------------------------------------------------------------------------------

После выполнения кода:

<?php

$a = "abradсabra";
echo str_replace("dсa", "c", $a);

?>

</body>
</html>