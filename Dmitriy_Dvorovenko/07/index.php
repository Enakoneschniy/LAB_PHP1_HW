<!DOCTYPE html>
<html lang="ru">
<head>
	    <title>Домашнее задание 07</title>
<meta charset="utf-8">
</head>
<body>
<p><strong>Задание 1</strong> </p>

<?php
//ini_set('display_errors', 1);

function show_table ($arr){
echo '<table cellpadding="4" cellspacing="0">'; // выводим теги для таблицы
	foreach ($arr as $key => $value) { // собственно вывод массива в виде таблицы
	echo "<tr>";
		foreach ($value as $data)
		    echo "<td>".$data,"</td>";
		echo "</tr>";
		}
return $data;
echo "</table>";


}

function piffag ($num){
$resArr = []; // объявляем пустой массив       
for ($i = 1; $i<=$num; $i++){ //тут заполняем массив числами от 1 до 10 - это получится верхняя строка
	for ($n = 1; $n<=10; $n++){  // в этом цикле формируем столбик от 1 до 10 и перемножаем значения
        $resArr[$i][] = $i*$n;
    }
 }
 return $resArr;
}


function diags ($num){

$resArr = array();
for ($i = 1; $i<=$num; $i++){ 
	for ($n = 1; $n<=$num; $n++){ 
       if ($i == $n)
        	$resArr[$i][$n] = 1;
        elseif ($i+$n==$num+1)
        	$resArr[$i][$n] = 2;
        elseif ($i+$n<$num+1 && $i<$n)
        	$resArr[$i][$n] = 3;  
        elseif ($i+$n>$num+1 && $i>$n)
        	$resArr[$i][$n] = 5;
        elseif ($i+$n<$num+1 && $i>$n)
        	$resArr[$i][$n] = 6;
        elseif ($i+$n>$num+1 && $i<$n)
        	$resArr[$i][$n] = 4;    	
	}
}
return $resArr;
}


$resArr = diags(10); 
echo show_table($resArr); 	 
$arrPif = piffag(10);
echo show_table($arrPif);





?>

</body>
</html>