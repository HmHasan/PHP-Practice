<?php


spl_autoload_register(function($class){
    include "classes/"."$class".".php";
});


$student = new Student();
$teacher = new Teacher();

?>