<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
        class person {
            public $personName;
            public $personAge;

            public function personDetails($name,$age)
            {
                echo "Person Name: " . $this->personName = $name . " Age: " . $this->personAge = $age;
            }
        }
        $person = new person();

        $person->personDetails("Mahmudul Hasan","22");

    ?>
</body>
</html>