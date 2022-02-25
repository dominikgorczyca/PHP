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

    $money = ["a" => 1, "b" => 2, "c" => 3.00];
    list("b" => $first, "a" => $gg, "c" => $third) = $money;


    
    // d([...$money], 'p');
    d($first);
    d($gg);
    d($third);

    





    ?>
</body>

</html>