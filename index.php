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

    // function gen_one_to_three() {
    //     for ($i = 1; $i <= 3; $i++) {
    //         // Note that $i is preserved between yields.
    //         yield $i;
    //     }
    // }

    // $generator = gen_one_to_three();
    // foreach ($generator as $value) {
    //     echo "$value\n";
    // }

    class anything implements IteratorAggregate {
        private $things = ["nice", "noice", "neice"];

        public function getIterator(): Traversable
        {
            return new ArrayIterator(($this -> things));
        } 
    }

    function format($a = "g", $b = "a", $c = "s") {
        return "$a$b$c";
    }

    $oh = ["b" => "oi"];

    d(format(b: "oi"));



    





    ?>
</body>

</html>