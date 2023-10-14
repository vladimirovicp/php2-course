<?php
class Book extends Goods implements IGoods {

    static public $counter = 0;
    // title, author, description, price

    public function __construct($title, $author, $description, $price){
        parent::__construct($title, $price);
        $this->author = $author;
        $this->description = $description;
        self::$counter++;
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
    public function getJSON(){}
    public function getCSV(){}


    //Добавьте метод __clone() классу Book и вывести в нём фразу <hr>Клонирован
    //экземпляр класса [CLASS]<hr>

    public function __clone(){
        echo "<hr>Клонирован экземпляр класса [Book]<hr>";
    }

    //В классе Book создайте "магический" метод __call() с
    //двумя аргументами $name - принимает название вызываемого несуществующего
    //метода и $arguments - массив аргументов, передаваемый вызываемому
    //несуществующему методу.

    public function __call($name,$arguments){

        //В теле __call() в произвольном виде выведите значения аргументов.
        echo "<pre>$name: ",print_r($arguments),"</pre>";


        //!!! Если будет время, сделайте так, чтобы __call() позволял делать вызовы
        //типа $book->html() или $book->json().
        //Т.е. метод должен проверять существование
        //соответствующего метода типа getHTML() и вызывать, если он существует.

    }

    // Откройте класс Book
    //Опишите в классе метод __invoke(), опишите в классе метод __toString().

    public function __invoke(){
        echo '<hr>Вызван<hr>';
    }

    public function __toString(){
        return $this->title;
    }



}