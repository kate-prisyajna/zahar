<?php

echo <<<'EOD'
<pre><b>
6. Реализовать функцию шифрования строки по словарю + шифр цезаря, реализовать функцию дешифровки.</b>

----------------------------------------------------------------------------------------------------------------------

Ответ: 

ДОДЕЛЫВАТЬ

----------------------------------------------------------------------------------------------------------------------

После выполнения кода:


EOD;

$message="12345";


$arr = str_split($message);
$alfabet=['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
function shifr($arr)

{

    $i=1;
    while ($i < count($arr)) {

        echo $arr[$i];
        $i++;

    }
    echo $arr[0];
    // $message[$i] = $alfabet[$j + 3];
}


var_dump (shifr($arr));

/*$arr2 = implode($arr);
echo "jndtn". $arr2;*/