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
        $units = ['me', 'you', 'them', 'wizard'];
        echo array_unshift($units, "wait", "what", "why");
        d($units, 'p');

    ?>
</body>

</html>