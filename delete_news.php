<?php
$id = (int)$_GET['id'];
$mysqli = new mysqli("n2o93bb1bwmn0zle.chr7pe7iynqr.eu-west-1.rds.amazonaws.com", "t3yx98bakhvb6qcu",
    "qd7hagdyc9mp44g5 ", "msf3ai2ttoov1rtw");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$stmt = $mysqli->prepare("DELETE FROM news WHERE id = (?)");
$stmt->bind_param("i", $id);
$stmt->execute();

header('Location: news.php', false);
