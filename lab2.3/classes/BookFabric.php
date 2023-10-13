<?php

//Откройте BookFabric.php и опишите одноимённый класс, в классе создайте
//статический метод get(), принимающий такие же аргументы как и конструктор класса
//Book.
class BookFabric{
    static public function get($title, $author, $description, $price){
        return new Book($title, $author, $description, $price);
    }
}