<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oop</title>
</head>

<body>


    <p>1.Create a class called "Person" that has properties for first name, last name, and age. Add methods for getting and setting each of these properties.
    </p>

    <br><br><br>

    <?php
    class Person
    {
        public $firstName, $lastName, $age, $id = 0;

        private $Arry = [];
        function SetPersonInfo($firstName, $lastName, $age)
        {
            array_push($this->Arry, [$this->firstName = $firstName, $this->lastName = $lastName, $this->age = $age,]);
        }
        function GetPersonInfo($PersonId)
        {
            if ($PersonId == "ALL") {
                echo "<pre>";
                print_r($this->Arry);
                echo "</pre>";
            } else {
                echo "<pre>";
                print_r($this->Arry[$PersonId]);
                echo "</pre>";
            }
            // echo "Name:  ".($this->firstName)." ".($this->lastName)."</br> Age:".($this->age)."</br>";
            // return "Name:  ".($this->firstName)." ".($this->lastName)."</br> Age:".($this->age);
        }
    };
    class Employee extends Person
    {
        public $JobTitle;
        private $EmployeeArry = [];
        function SetEmployeeInfo($JobTitle, $firstName, $lastName, $age)
        {
            array_push($this->EmployeeArry, [$this->JobTitle = $JobTitle, $this->firstName = $firstName, $this->lastName = $lastName, $this->age = $age,]);
        }
        function GetEmployeeInfo($PersonId)
        {
            if ($PersonId == "ALL") {
                echo "<pre>";
                print_r($this->EmployeeArry);
                echo "</pre>";
            } else {
                echo "<pre>";
                print_r($this->EmployeeArry[$PersonId]);
                echo "</pre>";
            }
        }
    }
    class Car
    {
        public $model, $year, $color;
        private $CarArry = [];
        function SetEmployeeInfo($model, $year, $color)
        {
            array_push($this->CarArry, [$this->model = $model, $this->year = $year, $this->color = $color]);
        }
        function GetEmployeeInfo($EmployeeId)
        {
            if ($EmployeeId == "ALL") {
                echo "<pre>";
                print_r($this->CarArry);
                echo "</pre>";
            } else {
                echo "<pre>";
                print_r($this->CarArry[$EmployeeId]);
                echo "</pre>";
            }
        }
    }
    class BankAccount
    {
        public $AccountBalance, $Owner;
        private $BankArry = [];
        function SetEmployeeInfo($AccountBalance, $Owner)
        {
            array_push($this->BankArry, [$this->AccountBalance = $AccountBalance, $this->Owner = $Owner]);
        }
        function GetEmployeeInfo($BankId)
        {
            if ($BankId == "ALL") {
                echo "<pre>";
                print_r($this->BankArry);
                echo "</pre>";
            } else {
                echo "<pre>";
                print_r($this->BankArry[$BankId]);
                echo "</pre>";
            }
        }
    }
    class Rectangle{
        function AOT_BySides(int $side1,int $side2,int $side3){                
                return ($side1+$side2+$side3)/2;
        }
        function AOT_ByHB(int $height,int $base){                
                return ($height+$base)/2;
        }
        function CPR_ByLW($length, $width) {
            $perimeter = 2 * ($length + $width);
            return $perimeter;
        }
    }

$r=new Rectangle();






    $Person = new Person();
    $Person->SetPersonInfo("saif", "UR Rehman", "17");
    $Person->SetPersonInfo("ubaid", "khan", "11");
    $Person->SetPersonInfo("muneeb", "Sultan", "25");
    echo $Person->GetPersonInfo("ALL");
    ?>

</body>

</html>