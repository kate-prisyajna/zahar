<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задание 8</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head>
<body>

<pre><b>
8) Как необходимо изменить инициализацию массива, 
чтобы значение "California" имело индекс=4 без явного задания 4 => "California":
$states_of_the_USA=array("Alabama", "Colorado", "Hawaii", "California");</b>

----------------------------------------------------------------------------------------------------------------------<br/>

Ответ: 

$states_of_the_USA = array("Alabama", "Colorado", "Hawaii", "California");
$states_of_the_USA[] = "California";
echo $states_of_the_USA[4];
Можно выбрать индекс, с которого следует начинать отсчет, присвоить первому элементу массива 1.

----------------------------------------------------------------------------------------------------------------------<br/>

После выполнения кода:

<?php

$states_of_the_USA = array("Alabama", "Colorado", "Hawaii", "California");
$states_of_the_USA[] = "California";
echo $states_of_the_USA[4];

?>

</body>
</html>
