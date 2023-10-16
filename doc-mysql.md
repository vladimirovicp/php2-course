```
 mysql -uroot
```

```
select now(), database();
```

* Выбираем нашу базу
    ```use eshop;```
* Соединение с базой
```pgp
    $mysqli = new mysqli("localhost", "root", "", "eshop");
    var_dump($mysqli);
```
* Запрос
```php
   $result = $mysqli->query("select id, title from catalog where id = 1");

    echo "<pre>", var_dump($result), "</pre>";
```
* ```  select * from catalog; ```
* https://www.php.net/manual/ru/book.mysqli.php
* Подготовленый запрос
```php
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
```
* Пример
```php
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
```
* prepare - подготавливает запрос
* bind_result - связывает параметры для того что бы передавать
* execute - выполняет запрос


