<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home Work №4</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="form col-md-4 col-md-offset-1 col-lg-4 col-lg-offset-1">
                    <h3>Задача №1 и №2</h3>
                    <?php

                    if (!isset($_POST['submit'])) {
                        ?>
                        <form action="/" method="post" enctype="multipart/form-data">
                            <input type="text" class="form-control" name="city" placeholder="Ваш город" >
                            <input type="submit" class="btn btn-primary btn-block" name="submit" value="Подтвердить">
                        </form>
                    <?php
                        }
                    ?>

                    <?php

                    $city = $_POST['city'];
                    if (!empty($city)) {
                        echo "<p class='text-success'>Ваш город: $city</p>";
                    }

                    elseif (isset($_POST['submit']) && (empty($city))){
                        echo "<p class='text-danger'>Вы не ввели Ваш город</p>";
                    }

                    echo "<pre>";
                    print_r($_POST['city']);
                    echo "</pre>";
                    echo "<br>";
                    ?>
                </div>
                <div class="form col-md-4 col-md-offset-1 col-lg-4 col-lg-offset-1">
                    <h3>Задача №3</h3>
                    <form action="/" method="post" enctype="multipart/form-data">
                        <input type="text" class="form-control" name="name" placeholder="Ваше имя" >
                        <input type="submit" class="btn btn-primary btn-block" name="submit" value="Подтвердить">
                    </form>

                    <?php
                    $name = $_POST['name'];
                    if (!empty($_POST['name'])) {
                        echo "<p class='text-success'>Привет, $name</p>";
                    }
                    elseif (isset($_POST['submit']) && (empty($name))){
                        echo "<p class='text-danger'>Вы не ввели Ваше имя</p>";
                    }

                    echo "<pre>";
                    print_r($_POST);
                    echo "</pre>";
                    echo "<br>";
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="form col-md-4 col-md-offset-1 col-lg-4 col-lg-offset-1">
                    <h3>Задача №4</h3>
                    <form action="/" method="post">
                        <input type="text" class="form-control" name="user_name" placeholder="Ваше имя">
                        <input type="text" class="form-control" name="user_age" placeholder="Ваш возраст">
                        <textarea class="form-control" name="user_message" placeholder="Введите Ваше сообщение" rows="5"></textarea>
                        <input type="submit" class="btn btn-primary btn-block" name="submit" value="Подтвердить">
                    </form>

                    <?php
                    $user_name = strip_tags($_POST['user_name']);
                    $user_age = strip_tags($_POST['user_age']);
                    $user_message = strip_tags($_POST['user_message']);
                    if (isset($_POST['submit']) && (!empty($user_name) || !empty($user_age) || !empty($user_message))) {
                        echo "<p class='text-success'>Привет, $user_name, $user_age лет(годa) <br> твое сообщение: $user_message</p>";
                    }
                    elseif (isset($_POST['submit']) && (empty($user_name) || empty($user_age) || empty($user_message))){
                        echo "<p class='text-danger'>Вы не ввели все данные</p>";
                    }


                    echo "<pre>";
                    print_r($_POST);
                    echo "</pre>";
                    echo "<br>";
                    ?>
                </div>
                <div class="form col-md-4 col-md-offset-1 col-lg-4 col-lg-offset-1">
                    <h3>Задача №5</h3>
                    <?php
                    if (!isset($_POST['submit'])) {
                    ?>
                    <form action="/" method="post" enctype="multipart/form-data">
                        <input type="text" class="form-control" name="user_age_2" placeholder="Ваш возраст" >
                        <input type="submit" class="btn btn-primary btn-block" name="submit" value="Подтвердить">
                    </form>
                    <?php
                    }
                    ?>

                    <?php

                    $user_age_2 = $_POST['user_age_2'];
                    if (!empty($user_age_2)) {
                    echo "<p class='text-success'>Ваш возраст: $user_age_2</p>";
                    }

                    elseif (isset($_POST['submit']) && (empty($user_age_2))){
                    echo "<p class='text-danger'>Вы не ввели Ваш возраст</p>";
                    }

                    echo "<pre>";
                    print_r($_POST);
                    echo "</pre>";
                    echo "<br>";
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="form col-md-4 col-md-offset-1 col-lg-4 col-lg-offset-1">
                    <h3>Задача №6</h3>
                    <form action="/" method="post">
                        <input type="text" class="form-control" name="user_login" placeholder="Ваше логин">
                        <input type="password" class="form-control" name="user_password" placeholder="Ваш пароль">
                        <input type="submit" class="btn btn-primary btn-block" name="submit" value="Подтвердить">
                    </form>

                    <?php
                    if (isset($_POST['submit'])) {
                        $login = 'test';
                        $pass = '123';
                        $user_login = trim($_POST['user_login']);
                        $user_password = trim($_POST['user_password']);
                        if ($login === $user_login and $pass === $user_password) {
                            echo "<p class='text-success'>Доступ разрешен!</p>";
                        } else {
                            echo "<p class='text-danger'>Доступ запрещен!</p>";
                        }
                    }

                    echo "<pre>";
                    print_r($_POST);
                    echo "</pre>";
                    echo "<br>";
                    ?>
                </div>

            </div>
        </div>
    </body>
</html>
