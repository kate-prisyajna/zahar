<?php
echo <<<'EOD'
3) Что выведется, почему?<br/>

		$a = 10;<br/>
		$b =& $a;<br/>
		unset ($a);<br/>
		echo "$b \n";<br/>
После выполнения кода ответ:<br/>
EOD;

$a=10;
$b=&$a;
unset ($a);
echo "$b <br/>";
echo "Знак & является ссылкой, мы присвиваем переменной $b значение $a, после чего удаляем значение $a, но значение 10 осталось для переменно"

?>
