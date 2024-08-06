<?php
// Display errors
ini_set('display_errors', 1);
error_reporting(E_ALL);

class Human {
    protected $id;
    protected $name;
    protected $age;
    protected $city;
    protected $country;
    protected $gender;

    function __construct($id, $name, $age, $city, $country, $gender) {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->city = $city;
        $this->country = $country;
        $this->gender = $gender;
    }

    function __get($property) {
        return $this->$property;
    }

    function __set($property, $value) {
        $this->$property = $value;
    }
}

class Employee extends Human {
    private $position;
    private $company;
    private $annualSalary;
    private $workingHoursPerDay;

    function __construct($id, $name, $age, $city, $country, $gender, $position, $company, $annualSalary, $workingHoursPerDay) {
        parent::__construct($id, $name, $age, $city, $country, $gender);
        $this->position = $position;
        $this->company = $company;
        $this->annualSalary = $annualSalary;
        $this->workingHoursPerDay = $workingHoursPerDay;
    }

    function __get($property) {
        return $this->$property;
    }

    function __set($property, $value) {
        $this->$property = $value;
    }

}

$employee = new Employee(7, "Maha Mohammed", 26, "Cairo", "Egypt", "Female", "Software Engineer", "Vodafone", 150000, 9);

echo "<h1>Employee Details<br></h1>";
echo "ID: " . $employee->__get('id') . "<br>";
echo "Name: " . $employee->__get('name') . "<br>";
echo "Age: " . $employee->__get('age') . "<br>";
echo "City: " . $employee->__get('city') . "<br>";
echo "Country: " . $employee->__get('country') . "<br>";
echo "Gender: " . $employee->__get('gender') . "<br>";
echo "Position: " . $employee->__get('position') . "<br>";
echo "Company: " . $employee->__get('company') . "<br>";
echo "Annual Salary: " . $employee->__get('annualSalary') . "<br>";
echo "Working Hours Per Day: " . $employee->__get('workingHoursPerDay') . "<br>";

?>
