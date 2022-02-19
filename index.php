<?php

use function PHPSTORM_META\type;

function d(mixed $value, string $function = ''): void
{
    if ($function === 'p') {
        echo "<pre>";
        print_r($value);
        echo "</pre>";
    } else {
        echo "<pre>";
        var_dump($value);
        echo "</pre>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php

    class KECZ
    {
        private $legs;
        private $whiskers;
 
        public function __construct($a, $b)
        {
            $this -> legs = $a;
            $this -> whiskers = $b;
            d("a: {$this -> legs} i b: {$this -> whiskers}");
        }
    }

    $array1 = [new KECZ(10, 20), ["gr" => 3, "nutshell" => 4], 4, '4', 5, '5'];

    d($array1, 'p');
    d(in_array(new KECZ(10, 20), $array1, true));
    d(spl_object_hash($array1[0]));
    
    $object = &$array1[0];
    d(spl_object_hash($object));
    d(in_array($object, $array1, true));
    // d(in_array(spl_object_hash($object), $array1, true));


    ?>
</body>

</html>