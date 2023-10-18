# Модуль 5. Composer
## Практическая №5.1: Работа с composer

Установить Monolog и создать экземпляр

Убедитесь, что у вас есть сomposer или скачайте и установите его
(https://www.youtube.com/watch?v=X-yrrI11qdE). Обновите composer self-update.
Создайте файл composer.json при помощи команды composer init. Установите phpunit:
composer require --dev phpunit/phpunit. Добавьте изменения в composer.json {"autoload":
{"psr-0": {"Vendor\\Namespace": ["src/", "lib/"], "": "src/"} }, "config": { "optimize-autoloader":
true } }. Выполните последовательно composer update и composer dump-autoload
--optimize. В файле index.php укажите include "vendor/autoload.php". Создайте
экземпляры произвольных классов из папки src (например, Car.php). Измените
composer.json для psr:
{"require-dev":{"phpunit/phpunit":"^9.3"},"autoload":{"psr-4":{"Application\\":"module/Applicati
on/src/","Vendor\\Namespace\\":""}},"config":{"optimize-autoloader":true}} и перенесите
классы в папку module/Application/src/. В файле самих классов укажите пространство
имён типа namespace Application\Car, а в index.php создайте экземпляр new
\Application\Book\Book(). После composer update, проверьте работу приложения в
браузере. Познакомьтесь с https://packagist.org/ и установите произвольные пакеты
(например Monolog или Faker). Если будет время, установите Laravel или Symfony
(https://www.youtube.com/watch?v=ABdeoIm6e74)