<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задание 15</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head>
<body>

<pre><b>
15) Чему будет равна $var1 , почему?

       $var1 = 3;
       $var2 = &$var1;

       $var2=50;
       echo $var1;</b>
       
----------------------------------------------------------------------------------------------------------------------<br/>

Ответ: 

50
$var2 является ссылкой на $var1, что дает возможность доступа к содержимому одной переменной под разными именами.
переопределяем $var2, сответсвено и $var1 переопределится.

----------------------------------------------------------------------------------------------------------------------<br/>

После выполнения кода:

<?php

$var1 = 3;
$var2 = &$var1;
$var2=50;
echo $var1;

?>

</body>
</html>