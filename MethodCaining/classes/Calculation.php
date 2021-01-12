<?php 


class Calculation

{
    public function sum($a,$b)
    {
        echo "some is : ". $a + $b;
        return $this;
    }
    public function mult($a,$b)
    {
        echo "multipication is : ". $a * $b;
        return $this;
    }
}


?>