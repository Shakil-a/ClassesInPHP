<?php

//creating a Car class with a property of color and a method of run().

class Car {
    public $color;

    public function run(){
        echo 'Running car!';
    }

}
// creating an instance of that class called $friendsCar
$friendsCar = new Car();

//setting the property of color to red
$friendsCar->color = 'red';

//calling the method 
$friendsCar->run();

//echoing the color property to view on page if assigning it to red was succesful.
echo $friendsCar->color;