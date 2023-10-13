<?php
//В классе Book создайте свойства title, author, description, price и
//метод getHTML(), возвращающий информацию в виде HTML


class Book extends Goods{

    public $title;
    public $author;
    public $description;
    public $price;


    // title, author, description, price

    public function __construct($title, $author, $description, $price){
//        $this->title = $title;
        parent::__construct($title, $price);
        $this->author = $author;
        $this->description = $description;
//        $this->price = $price;
    }

    public function __destruct(){
        echo "Книга {$this->title} удалена<br />";
    }

    //public function get($format = parent::GOODS_HTML){
    public function get($format = self::GOODS_HTML){
        $method = "get".$format;
        return $this->$method();
    }

    public function getHTML(){
        return <<<HTML
<div class="book">
    <div class="title">{$this->title}</div>
    <div class="author">{$this->author}</div>
    <div class="description">{$this->description}</div>
    <div class="price">{$this->price}</div>
</div>
HTML;
    }

    public function getARRAY(){
        return [
            "title" => $this->title,
            "author" => $this->author,
            "description" => $this->description,
            "price" => $this->price
            ];

    }
}