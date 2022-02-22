<?php

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

    $array1 = [["gr" => 3, "nutshell" => 4], 4, '4', 5, '5'];
    d($array1, 'p');
    d(array_reverse($array1, true), 'p');
    d($array1, 'p');



    ?>
</body>

</html>