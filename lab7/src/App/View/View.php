<?php
namespace App\View;

class View
{
  public function render($template, $params){
    foreach($params as $key => $value)
    {
      $$key = $value;
    }
    ob_start();
    include $_SERVER['DOCUMENT_ROOT'] . '/lab7/views/'.$template.'.php';
    ob_end_flush();
  }
}