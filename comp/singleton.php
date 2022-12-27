<?php

/**
 * Implement Singleton
 */

 class Singleton {
    private $instance;

    private function __construct() { }

    public function getInstance() {
        if (!self::$instance) {
        // new self() is 'basically' equivalent to new Singleton()
        self::$instance = new self();
        }
    return self::$instance;
    }
    // Prevent cloning of the instance
    protected function __clone() { }
    // Prevent serialization of the instance
    protected function __sleep() { }
    // Prevent deserialization of the instance
    protected function __wakeup() { }
}

?>