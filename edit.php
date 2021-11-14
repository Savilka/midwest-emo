<?php
$id = (int)$_GET['id'];
$mysqli = new mysqli("n2o93bb1bwmn0zle.chr7pe7iynqr.eu-west-1.rds.amazonaws.com", "t3yx98bakhvb6qcu",
    "qd7hagdyc9mp44g5", "msf3ai2ttoov1rtw");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$headline = $_POST["headline"];
$announce = $_POST["announce"];
$text = $_POST["text"];
$pic = $_POST["pic"];


$stmt = $mysqli->prepare("UPDATE news SET headline = ?, announce = ?, text = ?, pic = ?  WHERE id = ?");
$stmt->bind_param("ssssi",  $headline, $announce, $text, $pic, $id);
$stmt->execute();

header('Location: one_news.php?id='.trim($id).'', false);

