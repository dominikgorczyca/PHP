<?php
function d($value)
{
    echo "<pre>";
    echo var_dump($value);
    echo "</pre>";
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



    function add(?int ...$nums): int 
    {
        // $nums = func_get_args();
        d($nums);
        return array_sum($nums);
    }

    d(add(3, 2, 10, 2, 222, '3.4', null));
    d(add(2.23232, 3));

    ?>
</body>

</html>