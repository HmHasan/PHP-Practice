<?php 

class Calculation

{
    
    public function sum($a,$b)
    {
        $c = $a+$b;
        echo "sum is :".$c ."<br>";
    }
    public function sub($a,$b)
    {
        $c = $a-$b;
        echo "subtraction is :".$c ."<br>";
    }
    public function mul($a,$b)
    {
        $c = $a*$b;
        echo "multiply is :".$c ."<br>";
    }
    public function div($a,$b)
    {
        $c = $a/$b;
        echo "division is :".$c ."<br>";
    }
    public function modulas($a,$b)
    {
        $c = $a%$b;
        echo "modulas is :".$c ."<br>";
    }

}


?>