<?php

class Singleton
{
    private static $instance = null;
    private $instanceTime = null;

    /**
     * Construct property visibility is private because we should not create an instance from outside with the "new" key.
     */
    private function __construct()
    {
        $this->instanceTime = date('Y-m-d H:i:s');
    }

    public static function getInstance()
    {
        if (null == self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function test()
    {
        echo '<li>Call Time: ' . date('Y-m-d H:i:s') . ' -> Instance created at : ' . $this->instanceTime;
    }

    private function __clone()
    {
    }
}

// $singleton = new Singleton;
// Outputs --> Fatal error: Call to private Patterns\Singleton::__construct()

$singleton = Singleton::getInstance();
$singleton->test();
sleep(1);

// $objCloned = clone $singleton;
// Outputs --> Fatal error: Uncaught Error: Call to private Singleton::__clone()

$singleton2 = Singleton::getInstance();
$singleton2->test();
sleep(2);

$singleton3 = Singleton::getInstance();
$singleton3->test();
