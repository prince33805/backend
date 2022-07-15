<?php
class Company {
    // Properties
    static public $companyName = "asdasdasdasdsadasdasd";
    static public $address = "11111";
    
    // Methods
    public function __construct($companyName,$address){
        $this->companyName = $companyName;
        $this->address = $address;
    }

    function showData(){
        echo "Company Name: " . $this->get_companyName();
        echo "\n";
        echo "Company Address: " . $this->get_address();
        echo "\n";
    }
    function set_companyName($companyName) {
        $this->companyName = $companyName;
    }

    function get_companyName() {
        return $this->companyName;
    }

    function set_address($address) {
        $this->address = $address;
    }

    function get_address() {
        return $this->address;
    }

}

class Developer extends Employee {
    function __construct($name,$age,$phone,$role)
    {
        parent::__construct($name,$age,$phone,"Developer",$role);
    }
}

class Graphic extends Employee {
    function __construct($name,$age,$phone,$role)
    {
        parent::__construct($name,$age,$phone,"Graphic",$role);
    }
}

class Reception extends Employee {
    function __construct($name,$age,$phone,$role)
    {
        parent::__construct($name,$age,$phone,"Reception",$role);
    }
}

class Employee extends Company{
    // Properties
    public $name;
    public $age;
    public $phone;
    public $department;
    public $role;

    public function __construct($name,$age,$phone,$department,$role){
        $this->name = $name;
        $this->age = $age;
        $this->phone = $phone;
        $this->department = $department;
        $this->role = $role;
    }
    
    // Methods
    function set_name($name) {
        $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }
    function set_phone($phone) {
        $this->phone = $phone;
    }
    function get_phone() {
        return $this->phone;
    }
    function set_age($age) {
        $this->age = $age;
    }
    function get_age() {
        return $this->age;
    }
    function set_department($department) {
        $this->department = $department;
    }
    function get_department() {
        return $this->department;
    }
    function set_role($role) {
        $this->role = $role;
    }
    function get_role() {
        return $this->role;
    }
    function showData(){
        echo "Company Name: " . Company::$companyName;
        echo "\n";
        echo "Company Address : " . Company::$address;
        echo "\n";
        echo "Employee Name: " . $this->get_name();
        echo "\n";
        echo "Employee Department: " . $this->get_department();
        echo "\n";
        echo "Employee Phone: " . $this->get_phone();
        echo "\n";
        echo "Employee Role: " . $this->get_role();
        echo "\n";
    }
}

$employee = new Developer("nameee",22,"1234567890","roleeee");
$employee->showData();

// $employee->set_name("Name2");
// $employee->set_age(11);
// $employee->set_phone("1234567899");
// $employee->set_role("a");
// $employee->showData();
