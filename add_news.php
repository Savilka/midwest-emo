<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Добавить новость</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<?php
require('menu.php')
?>
<div class="container mr-20 ml-20">
    <h2 class="text-color mt-4">Добавить новость</h2>
    <form method="post" id="add" class="bordered" action="add.php">
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label text-color">Заголовок</label>
            <textarea name="headline" required class="form-control" id="exampleFormControlTextarea1"
                      rows="2"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea2" class="form-label text-color">Анонс</label>
            <textarea name="announce" required class="form-control" id="exampleFormControlTextarea2"
                      rows="2"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea3" class="form-label text-color">Текст</label>
            <textarea name="text" required class="form-control" id="exampleFormControlTextarea3" rows="2"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea4" class="form-label text-color">Адрес картинки</label>
            <textarea name="pic" required class="form-control" id="exampleFormControlTextarea4" rows="2"></textarea>
        </div>
        <input type="submit" class="btn btn-dark" value="Отправить">
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
</body>
</html>


