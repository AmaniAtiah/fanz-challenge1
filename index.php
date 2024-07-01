
<?php


// An abstract class is declared using the abstract keyword.
// Abstract classes can have abstract methods, which are methods declared without a body.
// These methods are meant to be implemented (defined) in subclasses that extend the abstract class.
// Abstract classes can also have concrete methods, which are methods with a defined body.
// To create a subclass (or child class) that extends an abstract class, use the extends keyword.


// example of abstract
abstract class Animal {
    public abstract function makeSound();

    public function eat() {
        echo "I am eating.";
    }

}


class Dog extends Animal {
    public function makeSound() {
        echo "Woof!";
    }
}

// interface 

// An interface in PHP is declared using the interface keyword.
// Unlike abstract classes, interfaces cannot contain any method implementations or variables; they only define method signatures.
// Interfaces declare methods without any implementation details. Each method within an interface ends with a semicolon (;), indicating that it has no body.
// A class that implements an interface must provide implementations for all the methods defined in that interface.
// A class can implement multiple interfaces, separating them with commas.


// example of interface

interface Animal1 {
    public  function makeSound();
 
}


class Dog1 implements Animal {
    public function makeSound() {
        echo "Woof!";
    }
}

?>