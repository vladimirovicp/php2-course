<?php
namespace App\Book;
use PHPUnit\Framework\TestCase;

class BookTest extends TestCase{
    public function testCheckCorrectPropTitleInCreate(){
        $title = 'PHP9';
        $book = new Book('PHP9',1000);
        $this->assertEquals(
            $title,
            $book->title
        );
    }
}