<?php

class Controller
{
//  private $model;
  
//  public function __construct(Model $model){
//    $this->model = $model;
//  }


    public function __construct(){
        $this->view = new View;
    }
  public function index(){
       $titlePage = 'Главная страница';

//    return $this->model->content;
      return $this->render('index', [
          'titlePage' => $titlePage,
      ]);
  }
  public function about(){
//    return $this->model->content = "<h1>About</h1>";
      $titlePage = 'О нас';

//    return $this->model->content;
      return $this->render('index', [
          'titlePage' => $titlePage,
      ]);
  }

    public function book(){
        $titlePage = 'Книга';
//    return $this->model->content = "<h1>About</h1>";
        $book= new Book('php10', 1000);

//    return $this->model->content;
        return $this->render('book', [
            'titlePage' => $titlePage,
            'title' => $book->title,
            'price' => $book->price
        ]);
    }

    public function render($template,$params){
        return $this->view->render($template,$params);
    }

}