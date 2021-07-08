<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задание 13</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head>
<body>

<pre><b>
13) Что выведет var_dump($var1 == $var2), почему?

		$var1 = array("pen", "pencil", "table");
		$var2 = array(1 => "pencil", 2 => "table", 0 => "pen");
		var_dump($var1 == $var2);</b>
		
----------------------------------------------------------------------------------------------------------------------<br/>

Ответ: 

bool(true)
В данном примере массивы равны, 
так как каждый элемент массива $var1 (ключ/значение) = элементам массива $var2 (ключ/значение)

----------------------------------------------------------------------------------------------------------------------<br/>

После выполнения кода:

<?php

$var1 = array("pen", "pencil", "table");
$var2 = array(1 => "pencil", 2 => "table", 0 => "pen");
var_dump($var1 == $var2);

?>

</body>
</html>
