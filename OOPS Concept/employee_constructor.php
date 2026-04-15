<?php

class employee
{
    public function __construct()    // Default constructor:-
    {
        $this->code = 101;
        $this->name = "Deepak";
        $this->salary = 30000;
    }
    public function display()
    {
        echo "employee code:   " . $this->code;
        echo "<br>employee name:   " . $this->name;
        echo "<br>employee salary: " . $this->salary;
    }
}

$emp = new employee();    // Invoke constructor here automatically:-
$emp->display()

?>