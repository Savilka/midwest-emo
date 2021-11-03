<?php
ob_start();
session_start();

$_SESSION['admin'] = 1;

header('Location: index.php', false);
