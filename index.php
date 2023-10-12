<?php
class MyClass {
    const CONST_VALUE = 'Значение константы';
}

$classname = 'MyClass';
echo $classname::CONST_VALUE;

echo MyClass::CONST_VALUE;



class OtherClass extends MyClass
{
    public static $my_static = 'статическая переменная';

    public static function doubleColon() {
        echo parent::CONST_VALUE . "\n";
        echo self::$my_static . "\n";

        //если не написать self::, то создается статическая переменная.
    }
}

$classname = 'OtherClass';
$classname::doubleColon();

OtherClass::doubleColon();



class Cat
{
    public static $counter = 0;
    public function __construct()
    {
        echo ++self::$counter, "<hr />";
    }
}

new Cat;
new Cat;
new Cat;
echo Cat::$counter;

?>