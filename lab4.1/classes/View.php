<?php

class View
{
//  private $model;
//  private $controller;
//  public function __construct(Controller $controller, Model $model){


//    public function __construct($template, $params){
//    $this->template = $template;
//    $this->params = $params;
//  }

  public function render($template, $params){

      foreach ($params as $key => $value) {
         $$key = $value;
      }

      ob_start();
      include 'views/'.$template.'.php';
      ob_end_flush();

//    return
//      '<a href="mvc.php?action=index">Index</a> ' .
//      '<a href="mvc.php?action=about">About</a> ' .
//    $this->model->content;
  }
}