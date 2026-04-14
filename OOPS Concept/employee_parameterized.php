<?php

class employee
{
    private $code, $name, $salary;

    public function getdata($code, $name, $salary)
    {
        $this->code = $code;
        $this->name = $name;
        $this->salary = $salary;
    }
    public function display()
    {
        echo "employee code:   " . $this->code;
        echo "<br>employee name:   " . $this->name;
        echo "<br>employee salary :  " . $this->salary;
    }
}

$emp1 = new employee();
$emp1->getdata(501, "Ajit", 40000);
$emp1->display();

?>