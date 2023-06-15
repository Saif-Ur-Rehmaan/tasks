<?php
 abstract class  Shape{
    abstract function calculateArea();
 };
 class Rectangle implements Shape {
    private $length, $width;
    
    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }
    
    public function calculateArea() {
        return $this->length * $this->width;
    }
}

class Triangle implements Shape {
    private $base, $height;
    public function __construct($base, $height) {
        $this->base = $base;
        $this->height = $height;
    }
    
    public function calculateArea() {
        return ($this->base * $this->height) / 2;
    }
}

class Circle implements Shape {
    private $radius;
    public function __construct($radius) {
        $this->radius = $radius;
    }    
    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}




interface PaymentMethod{
    function pay();
    function getPaymentDetails(int $CARD_ID);
}
class CreditCard implements PaymentMethod{
    private $Arry=[];
    private $Amount,$name,$time;
    public function __construct(int $Amount, string $name)
    {
        $this->time=date("Y-m-d H:i:s");
        $this->name=$name;
        $this->Amount=$Amount;
    }
    public function pay(){
        array_push($this->Arry,[$this->time,$this->name,$this->Amount]);
    }
    
    public function getPaymentDetails(int $CARD_ID){
       echo " <pre>";
       print_r($this->Arry[$CARD_ID]);
       echo " </pre>";
    }
}
class DabiitCard implements PaymentMethod{
    private $Arry=[];
    private $Amount,$name,$time;
    public function __construct(int $Amount, string $name)
    {
        $this->time=date("Y-m-d H:i:s");
        $this->name=$name;
        $this->Amount=$Amount;
    }
    public function pay(){
        array_push($this->Arry,[$this->time,$this->name,$this->Amount]);
    }
    
    public function getPaymentDetails(int $CARD_ID){
       echo " <pre>";
       print_r($this->Arry[$CARD_ID]);
       echo " </pre>";
    }
}
class PayPal implements PaymentMethod{
    private $Arry=[];
    private $Amount,$name,$time;
    public function __construct(int $Amount, string $name)
    {
        $this->time=date("Y-m-d H:i:s");
        $this->name=$name;
        $this->Amount=$Amount;
    }
    public function pay(){
        array_push($this->Arry,[$this->time,$this->name,$this->Amount]);
    }
    
    public function getPaymentDetails(int $CARD_ID){
       echo " <pre>";
       print_r($this->Arry[$CARD_ID]);
       echo " </pre>";
    }
}



abstract class Animal {
    protected $name;
    protected $age;
    protected $species;
    
    public function __construct($name, $age, $species) {
        $this->name = $name;
        $this->age = $age;
        $this->species = $species;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function getAge() {
        return $this->age;
    }
    
    public function getSpecies() {
        return $this->species;
    }
    
    abstract public function makeSound();
}
class Dog extends Animal {
    public function makeSound() {
        return "Woof!";
    }
}
class Cat extends Animal {
    public function makeSound() {
        return "Meow!";
    }
}
class Horse extends Animal {
    public function makeSound() {
        return "Neigh!";
    }
}




interface Vehicle {
    public function getMake();
    public function getModel();
    public function getYear();
}
class Car implements Vehicle {
    private $make;
    private $model;
    private $year;
    
    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }
    
    public function getMake() {
        return $this->make;
    }
    
    public function getModel() {
        return $this->model;
    }
    
    public function getYear() {
        return $this->year;
    }
}
class Truck implements Vehicle {
    private $make;
    private $model;
    private $year;
    
    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }
    
    public function getMake() {
        return $this->make;
    }
    
    public function getModel() {
        return $this->model;
    }
    
    public function getYear() {
        return $this->year;
    }
}
class Motorcycle implements Vehicle {
    private $make;
    private $model;
    private $year;
    
    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }
    
    public function getMake() {
        return $this->make;
    }
    
    public function getModel() {
        return $this->model;
    }
    
    public function getYear() {
        return $this->year;
    }
}




abstract class Employee {
    protected $name;
    protected $jobTitle;
    protected $salary;
    
    public function __construct($name, $jobTitle, $salary) {
        $this->name = $name;
        $this->jobTitle = $jobTitle;
        $this->salary = $salary;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function getJobTitle() {
        return $this->jobTitle;
    }
    
    public function getSalary() {
        return $this->salary;
    }
    
    abstract public function calculatePay();
}
class FullTimeEmployee extends Employee {
    public function calculatePay() {
        return $this->salary;
    }
}
class PartTimeEmployee extends Employee {
    private $hoursWorked;
    private $hourlyRate;
    
    public function __construct($name, $jobTitle, $salary, $hoursWorked, $hourlyRate) {
        parent::__construct($name, $jobTitle, $salary);
        $this->hoursWorked = $hoursWorked;
        $this->hourlyRate = $hourlyRate;
    }
    
    public function calculatePay() {
        return $this->hoursWorked * $this->hourlyRate;
    }
}
class FreelanceEmployee extends Employee {
    private $hoursWorked;
    private $hourlyRate;
    
    public function __construct($name, $jobTitle, $salary, $hoursWorked, $hourlyRate) {
        parent::__construct($name, $jobTitle, $salary);
        $this->hoursWorked = $hoursWorked;
        $this->hourlyRate = $hourlyRate;
    }
    
    public function calculatePay() {
        return $this->hoursWorked * $this->hourlyRate;
    }
}
?>
