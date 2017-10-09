<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home Work №7</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="form col-md-4 col-md-offset-1 col-lg-4 col-lg-offset-1">
                    <h3>Задача №1</h3>
                    <?

                    function drawTable1($cols = 10, $rows = 10){
                        echo '<table>';
                            for ($tr = 1; $tr <= $rows; $tr++){
                                echo '<tr>';
                                    for ($td = 1; $td <= $cols; $td++){
                                        echo "<td style='padding-right: 5px;'>" . $tr*$td . "</td>";
                                    }
                                echo '</tr>';
                            }
                        echo '</table>';
                    }

                    function drawTable2($cols = 10, $rows = 10){
                        echo "<table>";
                        for ($x = 1; $x <= $rows; $x++){
                            echo '<tr>';
                            for ($y = 1; $y <= $cols; $y++){
                                echo "<td style='padding-right: 5px;'>";
                                    if ($x == $y){
                                        echo 1;
                                    }
                                    elseif (($x + $y) == $rows + 1){
                                        echo 2;
                                    }
                                    elseif ($y > $x && ($x + $y) < $rows + 1){
                                        echo 3;
                                    }
                                    elseif ($y > $x && ($x + $y) > $rows + 1){
                                        echo 4;
                                    }
                                    elseif ($y < $x && ($x + $y) > $rows + 1){
                                        echo 5;
                                    }
                                    else
                                        echo 6;
                                echo "</td>";
                            }
                            echo '</tr>';
                        }
                        echo '</table>';
                    }
                    ?>

                    <form action="index.php" method="post">
                        <label>Выберите матрицу</label>
                        <br />
                        <select name="type" id="" class="form-control">
                            <option value="first">Номер №1</option>
                            <option value="second">Номер №2</option>
                            <option value="third">Номер №3</option>
                        </select>
                        <input type="submit" class="btn btn-primary btn-block" name="submit" value="Подтверждение">
                    </form>

                    <?

                    if (isset($_POST['submit'])){
                        switch ($_POST['type']){
                            case 'first':
                                $res = drawTable1();
                                break;
                            case 'second':
                                $res = drawTable2();
                                break;
                            case 'third':
                                echo 'Не хватило сил, пукан уже дымит...';
                                break;
                        }
                    }
                    echo $res;
                    ?>
                </div>
                <div class="form col-md-4 col-md-offset-1 col-lg-4 col-lg-offset-1">
                    <h3>Задача №2</h3>

                    <?

                    for ($i = 1; $i <= 15; $i++){

                        if (($i > 3 && $i < 15) && ($i % 3 == 0)){
                            echo "$i*-<br>";
                        }
                        elseif ($i % 2 == 0){
                            echo "$i*<br>";
                        }
                        elseif ($i % 3 == 0){
                            echo "$i-<br>";
                        }
                        else {
                            echo "$i<br>";
                        }

                    }

                    ?>
                </div>
            </div>
            <div class="row">
                <div class="form col-md-4 col-md-offset-1 col-lg-4 col-lg-offset-1">
                    <h3>Задача №3</h3>

                    <?

                        $arrNum = [1,2,3,4,5,6];

                        function myReverse ($array)
                        {
                            $count = count($array);
                            if ($count % 2 == 0 && $count >= 4) {
                                echo 'Ваш массив';
                                echo '<pre>';
                                print_r($array);
                                echo '</pre>';
                                echo "Количество елементов в Вашем массиве: $count и они четные<br><br>";
                                $separation = array_chunk($array, 2);
                                $separation = array_reverse($separation);
                                $arrUnion = call_user_func_array('array_merge', $separation);
                                echo 'Ваш результат';
                                echo '<pre>';
                                print_r($arrUnion);
                                echo '</pre>';
                            }
                            else {
                                echo "Ошибка!!! В массиве должно быть минимум 4 елемента и они должны быть четными";
                            }
                        }

                        myReverse($arrNum);

                    ?>
                </div>
                <div class="form col-md-4 col-md-offset-1 col-lg-4 col-lg-offset-1">
                    <h3>Задача на рекурсию №1</h3>
                    <?
                    function recursion($int) {
                        if ($int < 1){
                            return 1;
                        }
                        recursion($int - 1);
                            echo "$int <br>";
                            return $int;
                    }

                    recursion(7);
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="form col-md-4 col-md-offset-1 col-lg-4 col-lg-offset-1">
                    <h3>Задача на рекурсию №2</h3>
                    <?

                    function forward($a,$b)
                    {
                        for ($a = 10; $a <= $b; $a + 1) {
                            echo $a++ . "<br>";
                        }
                        function backward($b, $a)
                        {
                            for ($b = 15; $b >= $a; $b - 1) {
                                echo $b-- . "<br>";
                            }
                        }
                    }
                    forward(10,25);
                    echo "<br>";
                    backward(20,5);

                    ?>
                </div>
                <div class="form col-md-4 col-md-offset-1 col-lg-4 col-lg-offset-1">
                    <h3>Задача на рекурсию №3</h3>

                   <!-- --><?/*
                    function getSum($int){
                        if ($int == 1){
                            return $int;
                        }
                        echo $int % 10 + getSum($int / 10);
                    }

                    getSum(1234);
                    */?>

                </div>
            </div>
            <div class="row">
                <div class="form col-md-4 col-md-offset-1 col-lg-4 col-lg-offset-1">
                    <h3>Задача на рекурсию №4</h3>

                </div>
                <div class="form col-md-4 col-md-offset-1 col-lg-4 col-lg-offset-1">
                    <h3>Задача на рекурсию №5</h3>
                        <?

                        echo $word = 'abba';
                        echo '<br>';
                        $checkWord = strrev($word);

                        if ($word == $checkWord){
                            echo 'Результат: YES';
                        }else
                            echo 'Результат: NO'

                        ?>
                </div>
            </div>
        </div>
    </body>
</html>
