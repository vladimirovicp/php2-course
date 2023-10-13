<?php

    class Journal extends Goods{

        public function __construct($title, $author, $description, $price){
            parent::__construct($title, $price);
            $this->author = $author;
            $this->description = $description;
        }

        public function __destruct(){
            echo "Журнал {$this->title} удален<br />";
        }

        public function get($format = self::GOODS_HTML){
            $method = "get".$format;
            return $this->$method();
        }

        public function getHTML(){
            return <<<HTML
<div class="journal">
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
