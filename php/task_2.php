<?php
echo <<<'EOD'
2) Вывести количество элементов массива";<br/>
<br/>
$box=array(1=>'помидор', '2'=>'яблоко', '1key'=>'груша', 'персик', true=>'апельсин');<br/>
$result=count($box);<br/>
echo "Количество элементов массива = $result";<br/>
<br/>
После выполнения кода ответ:<br/>
<br/>
<br/>
EOD;

$box=array(1=>'помидор', '2'=>'яблоко', '1key'=>'груша', 'персик', true=>'апельсин');
$result=count($box);
echo "Количество элементов массива = $result";

?>
