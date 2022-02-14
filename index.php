<?php
function d($value, $function = '')
{
    if($function === 'p') {
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
        $array1 = ["gr" => 3, "nutshell" => 4];
        $array2 = [2, 299, 10 => 33];
        $units = ["Ah" => 'me', 'you', "noice" => 'them', 'wizard'];
        echo array_push($units, ...$array2);
        $units[array_keys($array1)[0]] = '3';
        d($units, 'p');
        echo array_pop($units);
        d($units, 'p');
        d(array_splice($units, 5, 1));
        d($units, 'p');
        d(array_shift($units));
        d(array_shift($units));
        d($units, 'p');

    ?>
</body>

</html>