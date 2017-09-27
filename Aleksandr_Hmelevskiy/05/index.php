<?php

// Task 1
echo "Задание №1 <br><br>";

$result = 0;

for ($i = 1;$i <= 112;$i = $i + 3){
    $result += $i;
}

echo "Результат: $result";
echo "<hr>";
echo "<br>";

//Task 2
echo "Задание №2 <br><br>";

$arrLength = [];
for($i = 0;$i < 10;$i++){
    if ($i % 2){
        $arrLength[$i] = 1;
    }else {
        $arrLength[$i] = 0;
    }

}
echo "<pre>";
print_r($arrLength);
echo "</pre>";
echo "<hr>";
echo "<br>";

//Task 3
echo "Задание №3 <br><br>";

$arrSqrt = [];
for ($i = 0;$i < 10;$i++){
    $arrSqrt[$i]= pow($i,2);
}
echo "<pre>";
print_r($arrSqrt);
echo "</pre>";
echo "<hr>";
echo "<br>";

//Task 4
echo "Задание №4 <br><br>";

//Task 4 option 1

$arrSum = [10, 5, 15, 13, 18, 9];

echo array_sum($arrSum);
echo "<br>";
echo array_product($arrSum);
echo "<br>";
echo "<br>";

unset($arrSum);

//Task 4 option 2

$arrSum = [10, 5, 15, 13, 18, 9];

$sum = 0;
$product = 1;

foreach ($arrSum as $elementSum){
    $sum += $elementSum;
    $product *= $elementSum;
}

echo $sum ;
echo "<br>";
echo $product;
echo "<br>";
echo "<br>";
echo "<hr>";

//Task 5
echo "Задание №5 <br><br>";

$arrInt = ["1", "2", "4", "4", "2", "5"];

$resultInt = array_unique($arrInt);

echo "<br>";
echo "<pre>";
print_r($resultInt);
echo "</pre>";
echo "<br>";
echo "<hr>";

//Task 6
echo "Задание №6 <br><br>";

$arrNum=[1,-1,2,-2,3,-3,4,-4,-10];

$num = count($arrNum);

for ($i = 0;$i < $num;$i++){
    if ($arrNum[$i] < 0){
        $arrNum[$i] = 0;
    }
}

echo "<br>";
echo "<pre>";
print_r($arrNum);
echo "</pre>";
echo "<br>";
echo "<hr>";

//Task 7
echo "Задание №7 <br><br>";

$bmw = [
    "model"=>"X5",
    "speed"=>120,
    "doors"=>5,
    "year"=>"2006"
];
$toyota = [
    "model"=>"Carina",
    "speed"=>130,
    "doors"=>4,
    "year"=>"2007"
];
$opel = [
    "model"=>"Corsa",
    "speed"=>140,
    "doors"=>5,
    "year"=>"2007"
];
echo "BMW";

foreach ($bmw as $value){
    echo " - $value ";
}

echo "<br>";
echo "Toyota";

foreach ($toyota as $value){
    echo " - $value ";
}

echo "<br>";
echo "Opel";

foreach ($opel as $value){
    echo " - $value ";
}

echo "<br>";
echo "<hr>";

//Task 8
echo "Задание №8 <br><br>";

$arrCars = [
    'BMW' => [
        "model"=>"X5",
        "speed"=>120,
        "doors"=>5,
        "year"=>"2006"
    ],
    'Toyota' => [
        "model"=>"Carina",
        "speed"=>130,
        "doors"=>4,
        "year"=>"2007"
    ],
    'Opel' => [
        "model"=>"Corsa",
        "speed"=>140,
        "doors"=>5,
        "year"=>"2007"
    ]
];

foreach ($arrCars as $mark => $arrCar) {
    echo "$mark ";
    foreach ($arrCar as $markCar => $characteristics){
        echo "- $characteristics ";
    }
    echo "<br>";
}


