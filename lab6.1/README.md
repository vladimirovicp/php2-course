# Модуль 6. Вспомогательные инструменты
## Практическая №6.1: Тестирование, анализ и
документирование кода

Напишите тестовый класс BookTest для класса Book и расположите его в папке
module/Application/tests. Перейдите в папку с PHPUnit: cd vendor/phpunit/phpunit и
проверьте версию фреймворка для тестирования php phpunit --version. Вернитесь в
папку проекта и выполните тесты php vendor/phpunit/phpunit/phpunit --bootstrap
vendor/autoload.php module/Application/tests. Тестовый файл будет примерно таким:

```php
<?php
use PHPUnit\Framework\TestCase;
use Application\Book\Book;
class BookTest extends TestCase
{
public function testNewBook()
{
$newBook = new Book();
$this->assertSame( get_class($newBook) , 'Application\Book\Book');
}
}

```

Установите PHPStan: composer require --dev phpstan/phpstan (или Psalm, или Phan).
Выполните статические анализ кода при помощи PHPStan: php
vendor/phpstan/phpstan/phpstan analyze module/Application/src module/Application/tests.
Выберите уровень анализа https://phpstan.org/user-guide/rule-levels и проанализируйте
свои классы php vendor/phpstan/phpstan/phpstan analyze -l 4 module/Application.
Попробуйте повысить уровень и вывести результаты в файл php
vendor/phpstan/phpstan/phpstan analyze -l 8 --error-format=prettyJson module/Application >
errors.json. Скачайте одну из последних версий PHPDoc (в формате phar):
https://github.com/phpDocumentor/phpDocumentor/releases/. Используя PHPDoc
синтаксис, напишите комментарии к классу Book и сгенерируйте документацию при
помощи PHPDoc: php phpDocumentor.phar -d ./module/Application/src/. Подсказка:
посмотрите теги https://docs.phpdoc.org/latest/references/phpdoc/index.html

```php
<?php
/**
* @author My Name
* @author My Name <my.name@example.com>
*/
namespace Application\Book;
/**
* I belong to a class
*/
class Book {
/**
* @param string $argument1 This is the description.
* @return string This is the description.
*/
public function foo($str){
}
}
```
