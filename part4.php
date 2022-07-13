<?php
class Company {
    // Properties
    public $name;
    public $address;

    public function __construct($name,$address){
        $this->name = $name;
        $this->address = $address;
    }
    
    // Methods
    function set_name($name) {
        $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }
    function set_address($address) {
        $this->address = $address;
    }
    function get_address() {
        return $this->address;
    }
}

class Developer extends Company {
    
}

class Graphic extends Company {
    
}

class Reception extends Company {
    
}

class Employee {
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

}





$company1 = new Company("aaa","123");
echo "Company Name: " . $company1->get_name();
echo "\n";
echo "Company Address: " . $company1->get_address();
echo "\n";

$employee = new Employee("nameee",22,"1234567890","deppp","roleeee");
// $employee->set_name("Name2");
// $employee->set_age(11);
// $employee->set_phone("1234567899");
// $employee->set_department("asdasd");
// $employee->set_role("a");
echo "Name: " . $employee->get_name();
echo "\n";
echo "age: " . $employee->get_age();
echo "\n";
echo "phone: " . $employee->get_phone();
echo "\n";
echo "Dep: " . $employee->get_department();
echo "\n";
echo "role: " . $employee->get_role();
