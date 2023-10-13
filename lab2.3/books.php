<?php
    //include "classes/Book.php";

    include "autoload.php";

    $book1 = new Book("PHP1", "Автор1", "", 1000);
    $book2 = new Book("PHP2", "Автор2", "", 2000);

    $journal1 = new Journal("PHP Inside", "Автор3", "", 100);

    //Создайте и верните экземпляр Book из метода get(). В файле books.php
    //убедитесь, что получается создать экземляр Book через статический вызов
    //BookFabric::get()
    $book3 = BookFabric::get("PHP3", "Автор3", "", 1500);


    echo $book1->get();
    echo $book2->get();
    echo $journal1->get();
    echo "<hr />";
    echo "<pre>",var_dump($journal1->get(GOODS::GOODS_ARRAY)),"</pre>";
    echo "<hr />";
    echo Book::$counter;
    echo "<hr />";
    echo Journal::$counter;
    echo "<hr />";


