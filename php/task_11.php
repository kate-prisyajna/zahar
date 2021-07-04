<?php

echo <<<'EOD'
<pre><b>
11) Что выведется в случае а) и в случае б) в var_dump($var)? Почему?
           а) $var= var1 + var2
           б) $var= var2 + var1
    
           $var1 = array(0 => "car", 1 => "bicycle", 3 => "auto");
           $var2 = array("bike", "bicycle", "car");
    
           $var = $var1 + $var2;
           var_dump($var);
    
           $var = $var2 + $var1;
           var_dump($var);</b>
		
----------------------------------------------------------------------------------------------------------------------<br/>

Ответ: 

$var = $var1 + $var2;
var_dump($var);
в результате получим: [0]=>"car", [1]=>"bicycle", [3] => "auto", [2]=>"car"
при обьединении массивов: $var1 + $var2, все дублирующие ключи масива $var2 будут перезатерты.
$var = $var2 + $var1;
var_dump($var);
в результате получим: [0]=>"bike", [1]=>"bicycle", [2]=>"car", [3] => "auto"
при обьединении $var2 + $var1, все дублирующие ключи масива $var1 будут перезатерты.

----------------------------------------------------------------------------------------------------------------------<br/>

После выполнения кода:

EOD;
$var1 = array(0 => "car", 1 => "bicycle", 3 => "auto");
$var2 = array("bike", "bicycle", "car");
$var = $var1 + $var2;
var_dump($var);
echo "<br/>";
$var1 = array(0 => "car", 1 => "bicycle", 3 => "auto");
$var2 = array("bike", "bicycle", "car");
$var = $var2 + $var1;
var_dump($var);