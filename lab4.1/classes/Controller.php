<?php

class Controller
{
//  private $model;
  
//  public function __construct(Model $model){
//    $this->model = $model;
//  }
    public function __construct(){

    }
  public function index(){
        $titlePage = 'Главная страница';

//    return $this->model->content;
      return new View;
  }
  public function about(){
    return $this->model->content = "<h1>About</h1>";    
  }
}