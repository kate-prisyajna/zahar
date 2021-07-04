<?php

echo <<<'EOD'
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

EOD;
$states_of_the_USA = array("Alabama", "Colorado", "Hawaii", "California");
    for ($i = 0; $i < count($states_of_the_USA); $i++) {
        print_r($states_of_the_USA[$i] . "<br/>");
    }