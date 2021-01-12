<!-- --get and --set -->
<?php


// class kids

// {
//     public function __set($property, $value)
//     {
    
//             $this->property= $value;
//     }

//     public function __get($property)
//     {
//         return $this->property;
//     }

// }

// $kids = new kids;
// $kids->height = 5;
// echo $kids->height;


?>
<!-- __Call Method -->

<?php


class Call

{
    public function __construct()
    {
        echo "Okey fine : this class calls <br>";
    }

    public function __call($method,$arg)
    {
        echo "undefine method calling $method";
    }
}

$Call = new Call;

$Call->hasan();




?>