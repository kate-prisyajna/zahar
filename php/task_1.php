<?php
echo "1) С помощью функции list вывести в переменной  vegetable первый элемент массива - помидор.<br/> После выполнения кода ответ:<br/>";

$box=array('помидор', 'яблоко');
list($vegetable)=$box;
echo "первый элемент массива - $vegetable<br/>";



echo <<<'EOD'
<br/>
<br/>Мой код выглядит так:<br/>
$box=array('помидор', 'яблоко');<br/>
list($vegetable)=$box;<br/>
echo "Ответ: первый элемент массива - $vegetable";
EOD;

?>
