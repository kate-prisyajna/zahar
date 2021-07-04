<?php

echo <<<'EOD'
<pre><b>
32) Выведите в браузере текстовое поле с заполеннным в нем значением $string.
В одну строчку.</b>

----------------------------------------------------------------------------------------------------------------------

Ответ: 

1. Нужно присвоить значение переменной

$string='Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
Nam est erat, condimentum eget venenatis id, accumsan eu metus. 
Morbi porttitor odio tellus, vel placerat ligula ullamcorper id. 
Mauris ac erat nec nibh posuere vulputate mattis nec libero. 
Mauris imperdiet odio id lacinia luctus. 
Vestibulum bibendum nibh metus, nec fermentum nulla ultricies vitae. 
Suspendisse ornare consectetur congue. 
Duis imperdiet arcu sit amet urna sagittis, et ultricies arcu fermentum.';

2. Вывести эту переменную в теге input type="text" value="вывод переменной php"

----------------------------------------------------------------------------------------------------------------------

После выполнения кода:

EOD;

$string='Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
Nam est erat, condimentum eget venenatis id, accumsan eu metus. 
Morbi porttitor odio tellus, vel placerat ligula ullamcorper id. 
Mauris ac erat nec nibh posuere vulputate mattis nec libero. 
Mauris imperdiet odio id lacinia luctus. 
Vestibulum bibendum nibh metus, nec fermentum nulla ultricies vitae. 
Suspendisse ornare consectetur congue. 
Duis imperdiet arcu sit amet urna sagittis, et ultricies arcu fermentum.';

?>

<input type="text" value="<?php echo $string; ?>">
