<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задание 21</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head>
<body>

<pre><b>
21) Отсортировать массивы: Имена в алфавитном порядке, в порядке убывания, а возраст в порядке возрастания:  <a href="https://i.imgur.com/GQBdDxI.png">https://i.imgur.com/GQBdDxI.png<a/>

		$spisok = array(
		    'roz1' => array('id' => '1', 'age' => '19', 'gender' => 'm', 'login' => 'Kos'),
		    'roz2' => array('id' => '2', 'age' => '12', 'gender' => 'm', 'login' => 'Oleg'),
		    'roz3' => array('id' => '3', 'age' => '17', 'gender' => 'g', 'login' => 'Sasha'),
		    'roz4' => array('id' => '4', 'age' => '14', 'gender' => 'm', 'login' => 'Roma'),
		    'roz5' => array('id' => '5', 'age' => '15', 'gender' => 'g', 'login' => 'Galina'),
		    'roz6' => array('id' => '6', 'age' => '16', 'gender' => 'g', 'login' => 'Nadi'),
		    'roz7' => array('id' => '7', 'age' => '13', 'gender' => 'g', 'login' => 'Evgenia'),
		    'roz8' => array('id' => '8', 'age' => '18', 'gender' => 'm', 'login' => 'Sveta'),
		    'roz9' => array('id' => '9', 'age' => '11', 'gender' => 'g', 'login' => 'Julia'));</b>

----------------------------------------------------------------------------------------------------------------------

Ответ: 

Имена в алфавитном порядке, в порядке убывания

      		function login_sort_desc($z, $k)
		{
		    return ($z['login'] > $k['login']);
		}

		uasort($spisok, 'login_sort_desc');
		print_r($spisok);   

Возраст в порядке возрастания

		function age_sort($x, $y)
		{
		    return ($x['age'] <=> $y['age']);
		}

		uasort($spisok, 'age_sort');
		print_r($spisok);   


----------------------------------------------------------------------------------------------------------------------

После выполнения кода:

<?php

$spisok = array(
    'roz1' => array('id' => '1', 'age' => '19', 'gender' => 'm', 'login' => 'Kos'),
    'roz2' => array('id' => '2', 'age' => '12', 'gender' => 'm', 'login' => 'Oleg'),
    'roz3' => array('id' => '3', 'age' => '17', 'gender' => 'g', 'login' => 'Sasha'),
    'roz4' => array('id' => '4', 'age' => '14', 'gender' => 'm', 'login' => 'Roma'),
    'roz5' => array('id' => '5', 'age' => '15', 'gender' => 'g', 'login' => 'Galina'),
    'roz6' => array('id' => '6', 'age' => '16', 'gender' => 'g', 'login' => 'Nadi'),
    'roz7' => array('id' => '7', 'age' => '13', 'gender' => 'g', 'login' => 'Evgenia'),
    'roz8' => array('id' => '8', 'age' => '18', 'gender' => 'm', 'login' => 'Sveta'),
    'roz9' => array('id' => '9', 'age' => '11', 'gender' => 'g', 'login' => 'Julia'));

echo "Имена в алфавитном порядке, в порядке убывания:<br/>";
function login_sort_desc($z, $k)
{
    return ($z['login'] > $k['login']);
}
uasort($spisok, 'login_sort_desc');
print_r($spisok);


echo "<br/>Возраст в порядке возрастания:<br/>";
function age_sort($x, $y)
{
    return ($x['age'] <=> $y['age']);
}

uasort($spisok, 'age_sort');
print_r($spisok);

?>

</body>
</html>