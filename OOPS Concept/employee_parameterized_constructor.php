<?php

class employee
{
    public $code;
    public $name;
    public $salary;

    public function __construct($code, $name, $salary)   // Parameterized constructor:-
    {
        $this->code = $code;
        $this->name = $name;
        $this->salary = $salary;
    }

    public function display()
    {
        echo "employee code: " . $this->code;
        echo "<br>employee name: " . $this->name;
        echo "<br>employee salary: " . $this->salary;
    }
}

$emp = new employee(701, "Neeraj", 60000);
$emp->display();

?>