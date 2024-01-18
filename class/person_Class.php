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

    class Student extends Person {
        // New property for Student class
        public $studentID;
    
        // Constructor for Student class
        public function __construct($name, $age, $gender, $studentID) {
            parent::__construct($name, $age, $gender);
            $this->studentID = $studentID;
        }
    
        // Override the present method to include student ID
        public function present() {
            echo "Hello, my name is {$this->name}. I am {$this->age} years old, identify as {$this->gender}, and my student ID is {$this->studentID}.";
        }
    }
