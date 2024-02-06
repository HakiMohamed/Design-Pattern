<?php




class Singleton {
    private static $instance;

    public $attribute;

    private function __construct() {
        $this->attribute = "instance ID = 517626";
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    
}

$singletonInstance1 = Singleton::getInstance();
$singletonInstance1 = Singleton::getInstance();
$singletonInstance1 = Singleton::getInstance();
$singletonInstance5 = Singleton::getInstance();
$singletonInstance4 = Singleton::getInstance();
$singletonInstance3 = Singleton::getInstance();
echo $singletonInstance3->attribute . "\n"; 
echo $singletonInstance3->attribute . "\n"; 
echo $singletonInstance3->attribute . "\n"; 
echo $singletonInstance3->attribute . "\n"; 
echo $singletonInstance3->attribute . "\n"; 
echo $singletonInstance3->attribute . "\n";
echo $singletonInstance4->attribute . "\n";
echo $singletonInstance5->attribute . "\n";


