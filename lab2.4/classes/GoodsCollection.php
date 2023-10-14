<?php

class GoodsCollection{
    public function __construct(array $items){
        $this->items = $items;
    }

    public function show(){
        foreach ($this->items as $item){
            echo $item->get();
        }
    }
}