<?php
//В классе Book создайте свойства title, author, description, price и
//метод getHTML(), возвращающий информацию в виде HTML

class Book {

    const BOOK_HTML = 'HTML';
    const BOOK_JSON = 'JSON';
    const BOOK_CSV = 'CSV';
    const BOOK_ARRAY = 'ARRAY';


    public $title;
    public $author;
    public $description;
    public $price;


    // title, author, description, price

    public function __construct($title, $author, $description, $price){
        $this->title = $title;
        $this->author = $author;
        $this->description = $description;
        $this->price = $price;
    }

    public function __destruct(){
        echo "Книга {$this->title} удалена<br />";
    }

    //public function get($format = Book::BOOK_HTML){
    public function get($format = self::BOOK_HTML){
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
}

?>