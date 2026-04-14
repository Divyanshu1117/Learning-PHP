<?php

class employee
{
    private $code, $name, $salary;

    public function getdata()
    {
        $this->code = 101;
        $this->name = "Raj";
        $this->salary = 20000;
    }
    public function display()
    {
        echo "employee code:   " . $this->code;
        echo "<br>employee name:   " . $this->name;
        echo "<br>employee salary :  " . $this->salary;
    }
}

$emp1 = new employee();
$emp1->getdata();
$emp1->display();

?>