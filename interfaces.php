<?php 

//define an interface
interface Animal {
    public function makeSound();
}

// create two animal classes that implement the Animal interface
class Dog implements Animal {
   public function makeSound()
   {
    echo "Woof!";
   }
}

class Cow implements Animal {
    public function makeSound()
    {
        echo "Moo!";
    }
}

// create objects of the classes and call the makeSound() method
$dog = new Dog();
$dog->makeSound();

$cow = new Cow();
$cow->makeSound();