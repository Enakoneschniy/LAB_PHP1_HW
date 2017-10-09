
<?php

    //First_task
    echo "Задание №1<br>";
    echo "<br>";

    $age = 60;

    if ($age > 17 && $age <= 59){
        echo "Вам еще работать и работать<br>";
    }
    elseif ($age > 59){
        echo "Вам пора на пенсию<br>";
    }
    elseif ($age > 1 && $age <= 17){
        echo "Вам ещё рано работать<br>";
    }
    else {
        echo "Неизвестный возраст<br>";
    }

    echo "<br>";

    //Second_task
    echo "Задание №2<br>";
    echo "<br>";

    $cols = 10;
    $rows = 10;

?>

    <table border="1">
        <?php
        for ($tr=1; $tr<=$rows; $tr++) {
            echo "<tr>";
            for ($td=1; $td<=$cols; $td++) {
                if ($td==1 || $tr==1) {
                    echo "<th style='background: red'>" . $tr * $td . "</th>";
                } else {
                    echo "<td>" . $tr * $td . "</td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table><br>

    <?php

    //Third_task
    echo "Задание №3<br>";
    echo "<br>";

    for ($i = 1; $i <= 49; $i++ ){
        if($i % 2 === 0){
            continue;
        }
        echo $i, "<br>";
    }

    echo "<br>";

    //Fourth task
    echo "Задание №4<br>";
    echo "<br>";


    $x = 0.5;
    $y = 0.5;

    if (($y >= 1-$x) && ($x * $x + $y * $y <= 1)){
        echo "Ваши кординаты попадают в зону :)";
    }
    else {
        echo "Ваши кординаты не попадают в зону (:";
    }



