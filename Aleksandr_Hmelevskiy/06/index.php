<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home Work №6</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="form col-md-4 col-md-offset-1 col-lg-4 col-lg-offset-1">
                    <h3>Задача №1</h3>
                    <?php
                        function occurrenceNum ($arr, $num){
                            $x = 0;
                            $arrCount = count($arr);
                            for ($i = 0; $i < $arrCount; $i++){
                                if ($arr[$i] == $num){
                                    $x++;
                                }
                            }
                            return ($arrCount / 100) * $x;
                        }

                        $arrCol = 30;
                        $arr = [];
                        for ($i = 0; $i < $arrCol; $i++){
                            $num = rand(1, 30);
                            array_push($arr,$num);
                        }

                        if(isset($_POST['num']))$res = occurrenceNum($arr,$_POST['num']);
                        else $res = 0;

                        echo "<pre>";
                        print_r($arr);
                        echo "</pre>";

                    ?>
                    <br>
                    <form action="index.php" method="post">
                        <label>Введите число от 1 до 30</label>
                        <br />
                        <input type="text" class="form-control" name="num">
                        <input type="submit" class="btn btn-primary btn-block" name="submit" value="Вперед">
                    </form>
                    <p>Процент встречаемости - <?=$res?></p>
                </div>
                <div class="form col-md-4 col-md-offset-1 col-lg-4 col-lg-offset-1">
                    <h3>Задача №2</h3>

                    <?

                    function speed($s,	$t,	$method = 1){
                    $speed[1] =	$s / $t . 'км/ч';
                    $speed[2] =	$speed[1] /	3.6	.'м/с';
                    return	$speed[$method];
                    }

                    echo "Скорость движение машины: " . speed(120, 3);
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="form col-md-4 col-md-offset-1 col-lg-4 col-lg-offset-1">
                    <h3>Задача №3</h3>

                    <?

                    function factorial ($num, $factorial = 1){
                        for ($i = 1; $i <= $num; $i++) {
                            $factorial *= $i;
                        }
                        return $factorial;
                    }

                    echo 'Результат: ' . factorial(5);

                    ?>
                </div>
                <div class="form col-md-4 col-md-offset-1 col-lg-4 col-lg-offset-1">
                    <h3>Задача №4</h3>

                </div>
            </div>
            <div class="row">
                <div class="form col-md-4 col-md-offset-1 col-lg-4 col-lg-offset-1">
                    <h3>Задача №5</h3>
                    <?
                    function conversely ( $string ){
                        $strok = null;
                        for($i=0;$i<strlen($string);$i++)
                        {
                            $strok = $string[$i] . $strok;
                        }
                        return $strok;
                    }
                    echo conversely('Hello World!');
                    ?>
                </div>
                <div class="form col-md-4 col-md-offset-1 col-lg-4 col-lg-offset-1">
                    <h3>Задача №6</h3>

                    <?
                    $firstValue = $_POST['first_num'];
                    $secondValue = $_POST['second_num'];

                    function plus ($firstValue, $secondValue){
                        return $result = $firstValue + $secondValue;
                    }
                    function minus ($firstValue, $secondValue){
                        return $result = $firstValue - $secondValue;
                    }
                    function multiply ($firstValue, $secondValue){
                        return $result = $firstValue * $secondValue;
                    }
                    function division ($firstValue, $secondValue){
                        return $result = $firstValue / $secondValue;
                    }

                    ?>

                    <form action="index.php" method="post">
                        <label>Введите данные</label>
                        <br />
                        <input type="text" class="form-control" name="first_num">
                        <select name="method" id="" class="form-control">
                            <option value="+">+</option>
                            <option value="-">-</option>
                            <option value="*">*</option>
                            <option value="/">/</option>
                        </select>
                        <input type="text" class="form-control" name="second_num">
                        <input type="submit" class="btn btn-primary btn-block" name="submit" value="Посчитать">
                    </form>

                    <?

                    if (isset($_POST['submit'])){
                        switch ($_POST['method']){
                            case '+':
                                $res = plus($_POST['first_num'],$_POST['second_num']);
                                break;
                            case '-':
                                $res = minus($_POST['first_num'],$_POST['second_num']);
                                break;
                            case '*':
                                $res = multiply($_POST['first_num'],$_POST['second_num']);
                                break;
                            case '/':
                                $res = division($_POST['first_num'],$_POST['second_num']);
                                break;
                        }
                    }
                    echo 'Результат: ' . $_POST['first_num'] . $_POST['method'] . $_POST['second_num']. "=".$res;;

                    ?>

                </div>
            </div>
        </div>
    </body>
</html>
