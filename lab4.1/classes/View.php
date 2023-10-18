<?php

class View
{
  public function render($template, $params){

      foreach ($params as $key => $value) {
         $$key = $value;
      }

      ob_start();
      include 'views/'.$template.'.php';
      ob_end_flush();
  }
}