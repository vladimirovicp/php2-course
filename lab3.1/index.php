<?php


/*Создать функции для выборки, обновления, удаления и вставки данных в таблицы catalog и orders
selectCatalog() - выбирать
updateCatalog() - обновлять
deleteCatalog() - удалять
insertCatalog() - вставлять


selectOrders() - выбирать
updateOrders() - обновлять
deleteOrders() - удалять
insertOrders() - вставлять
*/

$mysqli = new mysqli("localhost", "root", "", "eshop");

function selectCatalog($mysqli, $title){

    $sql = "select id, title, author, pubyear, price from catalog where title LIKE ?";
    $title = "%$title%";

    $selectStmt = $mysqli->prepare($sql);
    $selectStmt->bind_param("s", $title);
    $selectStmt->bind_result($id, $title, $autor, $pubyear, $price);
    $selectStmt->execute();

    $result = [];
    while ( $selectStmt->fetch()){
        $result[] = [
            "id" => $id,
            "title" => $title,
            "autor" => $autor,
            "pubyear" => $pubyear,
            "price" => $price
        ];
    }

    return $result;

}
function updateCatalog($mysqli, int $id, int $price){
    $sql = "update catalog set price = {$price} where id = {$id}";
    $mysqli->query($sql);
}
function deleteCatalog($mysqli, int $id){
    $sql = "delete from catalog where id = $id";
    $mysqli->query($sql);
}
function insertCatalog($mysqli, $title, $autor, $pubyear, $price){
    $sql = "insert into catalog(title, author, pubyear, price) values(?, ?, ?, ?)";
    $stmt = $mysqli->prepare($sql);

    $stmt->bind_param("ssii", $title, $autor, $pubyear, $price);
    $stmt->execute();


}

//insertCatalog($mysqli,'PHP8', 'Noname2', 2023, 1000);

//deleteCatalog($mysqli,6);

//updateCatalog($mysqli, 5, 2222);

$result = selectCatalog($mysqli, 'PHP');
echo "<pre>",var_dump($result),"</pre>";