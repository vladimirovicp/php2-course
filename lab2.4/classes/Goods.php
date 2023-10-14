<?php

abstract class Goods {
        //static protected $counter = 0;
        const GOODS_HTML = 'HTML';
        const GOODS_JSON = 'JSON';
        const GOODS_CSV = 'CSV';
        const GOODS_ARRAY = 'ARRAY';
        public function __construct(string $title, float $price){
            $this->title = $title;
            $this->price = $price;
            //self::$counter++;
        }
        abstract public function get();
    }
