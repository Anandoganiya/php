<?php

class base{
    protected static function hello(){
        echo "hello anand in static";
    }
}

class derived extends base{
    public $derived_message;
    public function __construct(){
        $this->derived_message = parent::hello();
    }
}

$test = new derived();
echo $test->derived_message;















?>