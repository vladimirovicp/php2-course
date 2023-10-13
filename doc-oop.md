## Введение в ООП

```php
    class SimpleClass
    {
        // объявление свойства
        public $var = 'значение по умолчанию';
    
        // объявление метода
        public function displayVar() {
            echo $this->var;
        }
    }
    
    $instance = new SimpleClass();
    // можно без скобок $instance = new SimpleClass;
    
    echo $instance->var, "<hr />";
    echo $instance->displayVar(), "<hr />";
    
    // Это же можно сделать с помощью переменной:
    $className = 'SimpleClass';
    $instance = new $className(); // new SimpleClass()
```

### Константы классов
```php
    class MyClass
    {
        const CONSTANT = 'значение константы';
    
        function showConstant() {
            echo  self::CONSTANT . "\n";
        }
    }
    
    //Обращение к константе
    echo MyClass::CONSTANT .  "<hr />";
    
    $classname = "MyClass";
    echo $classname::CONSTANT . "<hr />";
    
    $class = new MyClass();
    $class->showConstant();
    
    echo $class::CONSTANT. "<hr />";
```

### Автоматическая загрузка классов

```php
    //spl - Standard PHP Library
    spl_autoload_register(function ($class_name) {
        include $class_name . '.php';
    });
    
    $obj  = new MyClass1();
    $obj2 = new MyClass2();
```
### Конструкторы и деструкторы

```php
    class Point {
        protected int $x;
        protected int $y;
    
        public function __construct(int $x, int $y = 0) {
            $this->x = $x;
            $this->y = $y;
    
            echo 'x = ', $this->x;
            echo '; y = '. $this->y . "<hr />";
        }
    
        public function __destruct() {
            $this->x = 0;
            $this->y = 0;
            echo 'Объект уничтожился <hr />';
        }
    
        //__destruct в случаи с файлом закрывает файл, в случаи с базой базу отключают.
    
    }
    /*
     * с версии 8.1 можно указывать модификаторы области видимости В примере protected
    class Point {
        public function __construct(protected int $x, protected int $y = 0) {
        }
    }
    */
    
    // Передаём оба параметра.
    $p1 = new Point(4, 5);
    // Передаём только обязательные параметры. Для $y используется значеие по умолчанию 0.
    $p2 = new Point(4);
    // Вызываем с именованными параметрами (начиная с PHP 8.0):
    $p3 = new Point(y: 5, x: 4);
```

### Магические методы
### Область видимости
```php
//public - видят все;
//protected - наследник может посмотреть, обратиться нельзя
//private - только доступ в классе, наследникам нельзя обращаться, но в методе можно.

/**
 * Определение MyClass
 */
    class MyClass
    {
        public $public = 'Public';
        protected $protected = 'Protected';
        private $private = 'Private';
    
        function printHello()
        {
            echo $this->public;
            echo $this->protected;
            echo $this->private;
        }
    }
    
    $obj = new MyClass();
    echo $obj->public; // Работает
    echo $obj->protected; // Неисправимая ошибка
    echo $obj->private; // Неисправимая ошибка
    $obj->printHello(); // Выводит Public, Protected и Private
    
    
    /**
     * Определение MyClass2
     */
    class MyClass2 extends MyClass
    {
        // Мы можем переопределить общедоступные и защищённые свойства, но не закрытые
        public $public = 'Public2';
        protected $protected = 'Protected2';
        private $private = 'Private2';
    
        function printHello()
        {
            echo $this->public;
            echo $this->protected;
            echo $this->private;
        }
    }
    
    $obj2 = new MyClass2();
    echo $obj2->public; // Работает
    echo $obj2->private; // Неопределён
    echo $obj2->protected; // Неисправимая ошибка
    $obj2->printHello(); // Выводит Public2, Protected2, Undefined

```

### Наследование
```php
    class Foo
    {
        public function printItem($string)
        {
            echo 'Foo: ' . $string . PHP_EOL;
        }
    
        public function printPHP()
        {
            echo 'PHP просто супер.' . PHP_EOL;
        }
    }
    
    class Bar extends Foo
    {
        public function printItem($string)
        {
            echo 'Bar: ' . $string . PHP_EOL;
        }
    }
    
    $foo = new Foo();
    $bar = new Bar();
    $foo->printItem('baz'); // Выведет: 'Foo: baz'
    $foo->printPHP();       // Выведет: 'PHP просто супер'
    $bar->printItem('baz'); // Выведет: 'Bar: baz'
    $bar->printPHP();       // Выведет: 'PHP просто супер'
```

```php
//Счётчик
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
```

```php
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
        }
    }
    
    $classname = 'OtherClass';
    $classname::doubleColon();
    
    OtherClass::doubleColon();
```
### Абстрактные классы

3 - PHP2 Module 2_2 (day 2) 44:17

Интерфейсы объектов
Трейты
Анонимные классы
Перегрузка
Пространство имён
