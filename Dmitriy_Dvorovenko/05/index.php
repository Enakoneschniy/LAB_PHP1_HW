<?php

echo "<strong>Задача2: </strong><br>";
echo "<br>";
$arrNumbers = [];
for ($cell = 0; $cell<10; $cell++){
	$arrNumbers[] = 0;
	if ($arrNumbers != 0) 
	$arrNumbers[] = 1;
	echo "Ячейка ($cell) Значение = $arrNumbers[$cell] <br>";
}

echo "<hr>";
echo "<strong>Задача3:</strong><br>";
echo "<br>";
$arrNumbers = [];
for ($cll = 0; $cll<10; $cll++){
	$arrNumbers[] = pow($cll, 2);
	echo "Ячейка ($cll) Значение = $arrNumbers[$cll] <br>";
}
echo "<hr>";
echo "<strong>Задача7:</strong><br>";
$bmw = [
	'model' => 'X5',
	'speed' => '120',
	'doors' => '5',
	'year' => '2006'

];

$toyota = [
	'model' => 'Carina',
	'speed' => '130',
	'doors' => '4',
	'year' => '2007'

];

$opel = [
	'model' => 'Corsa',
	'speed' => '140',
	'doors' => '5',
	'year' => '2007'

];
/*echo "<pre>";
print_r($bmw);
echo "<br>";
print_r($toyota);
echo "<br>";
print_r($opel);
echo "<br>";
echo "</pre>";*/
echo "<br>";
echo "<strong>bmw</strong>";
foreach ($bmw as $key => $value) {
	echo " - ", $value;
}
echo "<br>";
echo "<strong>toyota</strong>";
foreach ($toyota as $key => $value) {
	echo " - ", $value;
}
echo "<br>";
echo "<strong>opel</strong>";
foreach ($opel as $key => $value) {
	echo " - ", $value;
}

echo "<hr>";
echo "<strong>Задача8:</strong><br>";
echo "<br>";

$arrCars = [
	'bmw' => ['model' => 'X5',
			  'speed' => '120',
			  'doors' => '5',
			  'year' => '2006'],

	'toyota' => ['model' => 'Carina',
				'speed' => '130',
				'doors' => '4',
				'year' => '2007'],
	
	'opel' => ['model' => 'Corsa',
				'speed' => '140',
				'doors' => '5',
				'year' => '2007']			
];

foreach ($arrCars as $brand => $character) {
		echo "<strong>$brand</strong>";
	foreach ($character as $inner_key => $value) {
		echo " - $value";		
	}
	echo "<br>";
}

/*echo "<pre>";
print_r($arrCars);
echo "</pre>";*/
echo "<hr>";
echo "<strong>Задача4: </strong><br>";
echo "<br>";
//summ
$a = array(2, 4, 5, 6);
echo "summ array - a = " . array_sum($a) . "<br>";
//product
$b = array(2, 4, 5, 6);
echo "product array - b = " . array_product($b) . "<br>";


?>