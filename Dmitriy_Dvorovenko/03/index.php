<?php
echo  "Hello!!! <br>";
//пробы массива
$arrNubers = [
'Collins',
'Smith',
'Ferguson',
'SquarePants',
'Berluskoni',
'Shevchenko'];
echo "<br>";
//var_dump($arrNubers);
echo "<br>";

foreach ($arrNubers as $key => $value) {
	echo "ключ =>> ", $key, " значение ->> ", $value, "<br>";
}

echo "<hr>";
//Задание 1
echo "<br> Задание 1: <br>";	
for ($i = 0; $i < 50; $i++){
	if ($i%2 === 1) {
		echo $i, "<br>";
	}			
}

echo "<hr>";
//Задание 2
echo "Задание 2: <br>";

$age = 0;
if ($age <1 || $age > 60) {
	echo "Возраст неизвестен";
}
else{
		if ($age >59) {
			echo "Вам пора на пенсию";
		}
		else {
			if ($age <18) {
				echo "Вам еще рано работать";
			}
			if ($age >17) {
				echo "Вам еще работать и работать";
			}
		}
	}


	
















?>
