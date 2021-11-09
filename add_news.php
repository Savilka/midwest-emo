<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Добавить новость</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
<?php
require('menu.php')
?>
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

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>


