<?php

    namespace App\Book;
    class Book
    {
        public function __construct(string $title, float $price)
        {
            $this->title = $title;
            $this->price = $price;
        }
    }