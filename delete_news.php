<?php
$id = (int)$_GET['id'];
$mysqli = new mysqli("localhost", "root", "", "midwestemo");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$results = $mysqli->query("DELETE FROM midwestemo.news WHERE id = '$id'");
header('Location: news.php', false);