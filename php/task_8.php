<?php

echo <<<'EOD'
<pre><b>
8) Как необходимо изменить инициализацию массива, 
чтобы значение "California" имело индекс=4 без явного задания 4 => "California":
$states_of_the_USA=array("Alabama", "Colorado", "Hawaii", "California");</b>

----------------------------------------------------------------------------------------------------------------------<br/>

Ответ: 

$states_of_the_USA = array(1 => "Alabama", "Colorado", "Hawaii", "California");
print $states_of_the_USA[4];
Можно выбрать индекс, с которого следует начинать отсчет, присвоить первому элементу массива 1.

----------------------------------------------------------------------------------------------------------------------<br/>

После выполнения кода:

EOD;
$states_of_the_USA = array("Alabama", "Colorado", "Hawaii", "California");
$states_of_the_USA[] = "California";
echo $states_of_the_USA[4];
?>
