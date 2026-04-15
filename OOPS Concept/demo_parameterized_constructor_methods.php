<?php

class Demo
{
    public $a;
    public $b;
    public $c;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function sumdata()
    {
        $this->c = $this->a + $this->b;
        echo "<br>Sum = " . $this->c;
    }

    public function multidata()
    {
        $this->c = $this->a * $this->b;
        echo "<br>Multi = " . $this->c;
    }
}

$demo1 = new Demo(10, 20);
$demo2 = new Demo(30, 40);

$demo1->sumdata();
$demo1->multidata();

$demo2->sumdata();
$demo2->multidata();

?>