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
        $array = array(1, 2, 3);
        $coolerArray = ["bb" => 3, "s" => 2, 2 => 3];

        d($coolerArray);
        $array[33] = 2.5;
        $array[null] = "oi";
        $array[-1] = "aa";
        $array['-1.02'] = 'bb';
        $array[] = null;
        $array['z'] = 'ei';
        // d($array);
        // d($array, 'p');
        // d($array['-1.02'])

        foreach ($array as $key => $value) {
            if(!is_numeric($value)) {
                d("key: {$key}, value: {$value}");
            }
        }

    ?>
</body>

</html>