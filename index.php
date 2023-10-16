<?php

//mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "root", "", "eshop");

//if($mysqli->connect_error){
//    echo 'Сервер перегружен обратитесь позднее';
//    die;
//}

echo "<pre>",var_dump($mysqli), "</pre>";

echo '<hr>';

$result = $mysqli->query("select id, title from catalog where id = 1");

echo "<pre>", var_dump($result), "</pre>";

//$mysqli->query("DROP TABLE IF EXISTS test");
//$mysqli->query("CREATE TABLE test(id INT)");

$sql = "insert into catalog(title, author) values(?, ?)";
$stmt = $mysqli->prepare($sql);

$title = "PHP in 24 hours";
$autor = "NoName";

$stmt->bind_param("ss", $title, $autor);

$stmt->execute();

$selectStmt =  $mysqli->prepare("select id, title from catalog");
$selectStmt->bind_result($id, $title);
$selectStmt->execute();
echo "<table border=1>";
while ( $selectStmt->fetch()){
    echo "<tr>";
    echo "<td>",$id;
    echo "<td>",$title;
}
echo "</table>";