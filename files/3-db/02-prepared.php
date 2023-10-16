<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("example.com", "user", "password", "database");

/* Неподготовленный запрос */
$mysqli->query("DROP TABLE IF EXISTS test");
$mysqli->query("CREATE TABLE test(id INT, label TEXT)");

/* Подготовленный запрос, шаг 1: подготовка */
$stmt = $mysqli->prepare("INSERT INTO test(id, label) VALUES (?, ?)");

/* Подготовленный запрос, шаг 2: связывание и выполнение */
$id = 1;
$label = 'PHP';
$stmt->bind_param("is", $id, $label); // "is" означает, что $id связывается, как целое число, а $label - как строка

$stmt->execute();