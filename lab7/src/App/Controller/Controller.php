<?php
namespace App\Controller;
//use Book;
use View;
class Controller
{
    public function __construct()
    {
        $this->view = new View;
    }

    public function index()
    {
        $titlePage = 'Главная страница';

        return $this->render('index', [
            'titlePage' => $titlePage,
        ]);
    }

    public function about()
    {
        $titlePage = 'О нас';
        return $this->render('index', [
            'titlePage' => $titlePage,
        ]);
    }

    public function book()
    {
        $titlePage = 'Книга';
        $book = new Book('php10', 1000);
        return $this->render('book', [
            'titlePage' => $titlePage,
            'title' => $book->title,
            'price' => $book->price
        ]);
    }

    public function addbook()
    {
        $titlePage = 'Добавление книги';

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            //filter_input — Принимает переменную извне PHP и, при необходимости, фильтрует её
            $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);

            //Очищающие фильтры https://www.php.net/manual/ru/filter.filters.sanitize.php
            //Удаляет теги и кодирует двойные и одинарные кавычки, при необходимости удаляет или кодирует специальные символы.
            // Кодирование кавычек можно отключить, установив FILTER_FLAG_NO_ENCODE_QUOTES.
            //(Объявлен устаревшим, начиная с PHP 8.1.0, используйте вместо него функцию htmlspecialchars()).


            $price = (float)$_POST['price'];

            //file_put_contents — Пишет данные в файл
            //Если filename не существует, файл будет создан. Иначе, существующий файл будет перезаписан,
            // за исключением случая, если указан флаг FILE_APPEND.
            file_put_contents('books.txt', "$title|$price\n", FILE_APPEND);

            $_SESSION['flash'] = 'Книга добавлена';

            header('Location: /lab4.1/?action=addbook');
            die;
        }

        $flash = $_SESSION['flash'] ?? '';
        //unset — Удаляет переменную
        unset($_SESSION['flash']);

        return $this->render('addBookForm', [
            'titlePage' => $titlePage,
            'message' => $flash
        ]);
    }

    public function render($template, $params)
    {
        return $this->view->render($template, $params);
    }

}