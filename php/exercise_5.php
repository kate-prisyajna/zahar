<?php
echo "5. Вывести все простые числа в диапазоне от 30 до 60\n";


for ($k=30; $k <= 60; $k++) {
    $is_prime=true;
    for ($i=2; $i < $k; $i++) {
        if ($k % $i == 0) {
            $is_prime=false;
            continue;
        }
    }
    if ($is_prime){
        echo $k. " простое число\n";
    }

}
?>
