<?php
namespace App\Controllers;

use App\View\View;
use App\Controllers\BaseController;

class BasketController extends BaseController
{

  public function index()
  {
    global $mysqli;
    $titlePage = 'Корзина';

    $basket = $_SESSION['basket'];

    $keys = array_keys($basket);
    $keys = implode(',', $keys);

      $books = [];

      if (empty($keys) ){

      } else {
          $sql = 'SELECT id, title, price FROM catalog WHERE id IN ('. $keys .')';
          $result = $mysqli->query($sql);
          $rows = $result->fetch_all(MYSQLI_ASSOC);

          foreach($rows as $book){
              $books[] = [
                  ...$book,
                  'qty' => $basket[$book['id']],
              ];
          }
      }

 
    return $this->render('basket', [
      'titlePage' => $titlePage,
      'books' => $books,
    ]);
  }

  public function addbasket()
  {
    $idBook = (int) $_GET['id'];
    $_SESSION['basket'][$idBook]++;
    header('Location: /lab7/');
    die;
  }

  public function deletefrombasket()
  {
     $idBook = (int) $_GET['id'];

     //print_r($_SESSION['basket']);
     unset($_SESSION['basket'][$idBook]);

      //print '$idBook' . $idBook;
    
    header('Location: /lab7/basket');
    die;
  }

}