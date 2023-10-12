<?php

// Использование явного класса
class Logger
{
    public function log($msg)
    {
        echo $msg;
    }
}

$util->setLogger(new Logger());

// Использование анонимного класса
$util->setLogger(new class {
    public function log($msg)
    {
        echo $msg;
    }
});