<?php
    namespace App;
    use App\Book\Book;

    require __DIR__ . '/vendor/autoload.php';

    $faker = \Faker\Factory::create();
    echo $faker->name(), "<hr />";
    echo $faker->email(), "<hr />";
    echo $faker->text(), "<hr />";

    $book = new Book('qyerty', 123);
    var_dump($book);

    // Установить Monolog и создать экземпляр

    use Monolog\Level;
    use Monolog\Logger;
    use Monolog\Handler\StreamHandler;

// создать канал журнала
    $log = new Logger('name');
    $log->pushHandler(new StreamHandler('path/to/your.log', Level::Warning));

//добавить записи в журнал
    $log->warning('Foo');
    $log->error('Bar');
