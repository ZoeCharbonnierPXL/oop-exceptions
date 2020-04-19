<?php namespace workers;

use tools\Tool;

class Handyman implements Worker {
    private $tool;

    public function __construct($tool) {
        $this->tool = $tool;
    }

    public function work() {
        $this->tool->doSomething();
    }
}