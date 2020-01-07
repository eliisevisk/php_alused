<?php
//The parent class
class Car {
    // Private property inside the class
    private $model;

    //Public setter method
    public function setModel($model)
    {
        $this -> model = $model;
    }
    public function getModel()
    {
        return $this -> model;
    }
    public function hello()
    {
        return "HONKHONK! I am a <i>" . $this -> model . "</i><br />";
    }
}


//The child class inherits the code from the parent class
class SportsCar extends Car {
    private $style = 'with your dog';
    public function backseatDriver(){
        return '<br><br>Drive this <i>'.$this -> getModel(). '</i> '.$this -> style;
    }
}


//Create an instance from the child class
$toyo = new SportsCar();

// Set the value of the class’ property.
// For this aim, we use a method that we created in the parent
$toyo -> setModel('Toyoboyota');

//Use another method that the child class inherited from the parent class
echo $toyo -> hello();
echo $toyo -> backseatDriver();