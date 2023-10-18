<?php

//model

class Book
{
//    public $title;
//    public $author;
//    public $description;
//    public $price;


//  public $content;

    public function __construct(string $title, float $price){
        $this->title = $title;
        $this->price = $price;
    }

}