<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error Handling</title>
</head>
<body>
    <?php
    
        function num($num) {
            if($num > 5)
            {
                throw new Exception('value must be less than one');
            }
            return true;
        }
        try
        {
            num(6);
        }
        catch(Exception $e)
        {
            echo "Message ".$e->getMessage();
        }

    ?>
</body>
</html>