<?php
$id = (int)$_GET['id'];
$mysqli = new mysqli("n2o93bb1bwmn0zle.chr7pe7iynqr.eu-west-1.rds.amazonaws.com", "yfnk95pabxc7o8pb",
    "cji3ywltts8o22ui", "qytxwbkkn14vj0yd");
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

