<?php

echo <<<'EOD'
<pre><b>
23) Используя цикл for вывести все нечетные числа от 1 до 59 (в столбик).</b>

----------------------------------------------------------------------------------------------------------------------

Ответ: 

for ($i=0; $i <= 59; $i++) {
		    if ($i % 2) {
			echo $i . "\n";
		    }
		}

----------------------------------------------------------------------------------------------------------------------

После выполнения кода:


EOD;
for ($i=0; $i <= 59; $i++) {
    if ($i % 2) {
        echo $i . "\n";
    }
}