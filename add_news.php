<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Добавить новость</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<div id="container">
    <form method="post" id="add" class="bordered" action="add.php">
        <div class="row">
            <p>Заголовок:</p>
            <textarea name="headline" required> </textarea>
        </div>
        <div class="row">
            <p>Анонс:</p>
            <textarea name="announce" required> </textarea>
        </div>
        <div class="row">
            <p>Текст:</p>
            <textarea name="text" required> </textarea>
        </div>
        <div class="row">
            <p>Адрес картинки:</p>
            <textarea name="pic" required> </textarea>
        </div>
        <div class="row">
            <input type="submit" value="Отправить">
        </div>
    </form>
    <?php
    require('menu.php')
    ?>
</div>
</body>
</html>


