<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задание 9</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head>
<body>

<pre><b>
9) Вывести все элементы массива с помощью цикла for:
$states_of_the_USA = array("Alabama", "Colorado", "Hawaii", "California")</b>

----------------------------------------------------------------------------------------------------------------------<br/>

Ответ: 

$states_of_the_USA = array("Alabama", "Colorado", "Hawaii", "California");
		for ($i = 0; $i < count($states_of_the_USA); $i++) {
		    print_r($states_of_the_USA[$i]);
		}
		
----------------------------------------------------------------------------------------------------------------------<br/>

После выполнения кода:

<?php

$states_of_the_USA = array("Alabama", "Colorado", "Hawaii", "California");
    for ($i = 0; $i < count($states_of_the_USA); $i++) {
        print_r($states_of_the_USA[$i] . "<br/>");
    }

?>

</body>
</html>