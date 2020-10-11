<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
</head>
<body>
    <?php
    session_start();
    include 'userInfo.php';
    echo <<<TAG
<p>Author: $user</p>
TAG;
    if (isset($_SESSION['user_name'])) {
        echo "Hello " . $_SESSION['user_name'] . PHP_EOL;
    echo PHP_EOL . <<<TAG
<a href="/exit.php">Выйти</a>
TAG;
    } else {
        echo <<<TAG
<form enctype="multipart/form-data" action="post.php" method="POST">
        <label for="name_input">Введите имя пользователя</label>
        <input id="name_input" type="text" name="user_name">
        <button type="submit">Отправить</button>
    </form>
TAG;
    }

    ?>
</body>
</html>