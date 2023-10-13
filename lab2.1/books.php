<?php
    include "classes/Book.php";

    $book1 = new Book("PHP1", "Автор1", "", 1000);
    $book2 = new Book("PHP2", "Автор2", "", 2000);


    echo $book1->get();
    echo $book2->get();