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
	$v= 0;
	$v= $S / $t;
	return $v;
}
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
<p><?php
if (isset($_POST['time'])) {
	if ($_POST['time'] == 0) 
	echo "Введено не правильное значение";
	else{
	echo "Скорость в км/ч => ",speed ($_POST['distance'], $_POST['time']), "<br>";
	echo "Скорость в м/c =>", round(speed ($_POST['distance'], $_POST['time']) * 0.2778, 1), "<br>";}
}
?></p>

<p><strong>Задание 3</strong> </p>
<?php
function fackt ($n){
$f = 1;
	for ($i=1; $i <= $n; $i++) { 
		$f *= $i;
	}
	return $f;
}
?>
<form action="index.php" method="post">
	<label>Введите число</label>
    <input type="text" name="integer" />
    <br />
    <input type="submit" value="Показать !n" />
    <br />
</form>
<p><?php
if (isset($_POST['integer'])) {
	if ($_POST['integer'] == 0) 
	echo "!n = 1";
	else
	echo "!n = ", fackt($_POST['integer']), "<br>";
	
}
?></p>


</body>
</html>
