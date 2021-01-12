<?php include('method.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <p>Simple Calculator Using PHP OOP</p>
        <table>
            <tr>
                <td>First Number</td>
                <td><input type="number" placeholder="num1" name="num1"></td>
            </tr>
            <tr>
                <td>Second Number</td>
                <td><input type="number" placeholder="num2" name="num2"></td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="submit">calculate</button>
                </td>
            </tr>
        </table>
    </form>
    <?php
    
        if(isset($_POST['submit']))

        {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];

            $c = $num1 + $num2;

            echo $c;

        }
        
    ?>
</body>
</html>