<!DOCTYPE html>
<?php

if(isset($_POST['submit']))
{
    $names = $_POST['name'];
    $price = $_POST['price'];
   foreach($names as $key => $name)
   {
       $totalProduct = [
           'product'=>$names,
           'price'=>$price[$key],
       ];
       var_dump($totalProduct);
   }


}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="text" name="name[]" placeholder="name">
        <input type="number" name="price[]" placeholder="number"><br>
        <input type="text" name="name[]" placeholder="name">
        <input type="number" name="price[]" placeholder="number"><br>
        <input type="text" name="name[]" placeholder="name">
        <input type="number" name="price[]" placeholder="number"><br>
        <button type="submit" name="submit">submit</button>
    </form>
</body>
</html>