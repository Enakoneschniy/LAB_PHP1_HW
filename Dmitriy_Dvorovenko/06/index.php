<!DOCTYPE html>
<html lang="ru">
<head>
	    <title>Домашнее задание 06</title>
<meta charset="utf-8">
</head>
<body>
<p><strong>Задание 1</strong> </p>

<?php
ini_set('display_errors', 1);
function show_array ($arr) //функция для просмотра содержимого массива
{
	foreach ($arr as $key => $value) {
	 	echo "[$key] => $value <br>";
	}

}

function freq ($arr, $num)
{
	$x = 0;
	$count_arr = count($arr); // тут подсчитываем колличество элементов в массиве(первом параметре)
	for ($i=0; $i < $count_arr; $i++) { 
		if ($arr[$i] == $num) {  //если элемент массива (первый параметр) равно второму параметру
			$x++;				// инкрементируем х, чтоб потом посчитать %
		}
	}
	return ($count_arr / 100) * $x; //вычисляем и возвращаем собственно % выпадения
}

$arrNum = array(); //объявляем пустой массив 

for ($i=0; $i < 20; $i++) { // заполняем массив случайными числами (всего 20 значений)
	$num = rand(1, 10);	//переменная, в которой будут генерироваться эти самые случайные числа
	array_push($arrNum, $num);
}

/*echo "<pre>";
print_r($arrNum);
echo "</pre>";*/

show_array ($arrNum);

    if(isset($_POST['number']))
    	$result = freq($arrNum, $_POST['number']);
    else 
    	$result = 0;

?>
<br />
<br />
<form action="index.php" method="post">
    <label>Введите целое число от 0 до 10</label>
    <br />
    <input type="text" name="number" /><input type="submit" value="Применить" />
</form>
<p>% выпадения - <?=$result?></p>

<p><strong>Задание 2</strong> </p>

<?php
function speed ($S, $t)
{
	$v = 0;
	$v = $S / $t;
}

if (isset($_POST['distance']) && isset($_POST['time'])) {
	echo speed ($_POST['distance'], $_POST['time']), "Скорость в км/ч <br>";
	echo speed ($_POST['distance'], $_POST['time']), "Скорость в м/c <br>";
}

//echo speed(100, 2);
?>
<form action="index.php" method="post">
	<label>Введите расстояние</label>
    <input type="text" name="distance" />
    <br />
    <label>Введите время</label>
    <input type="text" name="time" />
    <br />
    <input type="submit" value="Показать" />
    <br />
</form>


</body>
</html>