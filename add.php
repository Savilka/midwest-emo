<?php
$mysqli = new mysqli("n2o93bb1bwmn0zle.chr7pe7iynqr.eu-west-1.rds.amazonaws.com", "yfnk95pabxc7o8pb",
    "cji3ywltts8o22ui", "qytxwbkkn14vj0yd");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$timestamp = date('Y-m-d H:i:s');
$headline = $_POST["headline"];
$announce = $_POST["announce"];
$text = $_POST["text"];
$pic = $_POST["pic"];


$stmt = $mysqli->prepare("INSERT INTO news(date, headline, announce, text, pic) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $timestamp, $headline, $announce, $text, $pic);
$stmt->execute();

header('Location: index.php', false);

