
<?php 

spl_autoload_register(function($className){
    include "classes/".$className.".php";
});

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="number" name="num1" placeholder="num1">
        <input type="number" name="num2" placeholder="num2">
        <button type="submit" name="submit">Calculation</button>
    </form>
</body>
</html>

<?php 

if(isset($_POST['submit']))

{
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    $calculate = new Calculation;
    $calculate->sum($num1,$num2);
    $calculate->sub($num1,$num2);   
    $calculate->mul($num1,$num2);   
    $calculate->div($num1,$num2);   
    $calculate->modulas($num1,$num2);   
}

?>

