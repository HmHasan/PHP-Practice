<?php 

final class Employee
{
    public static $age = 22;

    public function __construct()

    {
        echo "Person Age: " .self::$age;
    }

    public static function personDetails()

    {
        echo "This Is Static Method";
    }
}





 $e1 = new Employee;

 $e1::personDetails();



?>