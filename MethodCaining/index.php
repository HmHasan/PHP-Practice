<?php 



spl_autoload_register(function($classes){
    include "classes/".$classes.".php";
});

$calc = new Calculation;

$calc->sum(10,20)->mult(10,20);


?>