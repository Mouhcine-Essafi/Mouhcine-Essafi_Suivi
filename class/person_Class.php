<?php


class Person {
    // Properties
    public $name;
    public $age;
    public $gender;

    // Constructor
    public function __construct($name, $age, $gender) {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    // Method to present the person
    public function present() {
        echo "Hello, my name is {$this->name}. I am {$this->age} years old and identify as {$this->gender}.";
    }
}