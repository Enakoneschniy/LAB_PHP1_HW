
<?php

//First_task
echo "Задание №1<br>";
echo "<br>";

$name = 'Александр';
$age = 24;

echo "Меня зовут $name <br>";
echo "Мне $age года <br>";
echo "<br>";

//Second_task
echo "Задание №2<br>";
echo "<br>";

$a=7;
$s=1/4*$a*sqrt(3);

echo  "Площадь равностороннего треугольника: $s<br>";
echo "<br>";

//Third_task
echo "Задание №3<br>";
echo "<br>";

$a = 25;
$b = 20;
$c = 15;
$x = 0;

if($a < $c){
   $x = $a+$b/$c*$a;
}
elseif ($a > $c){
    $x = $c*$b+$c/$c*sqrt($c);
}
else {
    $x = 100;
}

echo "Результат: $x";





