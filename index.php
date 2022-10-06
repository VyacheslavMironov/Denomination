<?php

function broker($i, $arr, $many_denomination, $item, $index)
{
    $i += $arr[0];
    array_push($many_denomination[$item], $arr[$index]);
}

function count_denomination($count)
{
    $arr = [10, 5, 1];
    $many_denomination = array(
        '10' => [],
        '5' => [],
        '1' => []
    );

    $i = 0;

    while ($i < $count)
    {
        if (($count % 10) == 0) {
            $i += $arr[0];
            array_push($many_denomination['10'], $arr[0]);
            $count -= 10;
        }
        elseif (($count % 5) == 0) {
            $i += $arr[1];
            array_push($many_denomination['5'], $arr[1]);
            $count -= 5;
        }
        elseif (($count % 1) == 0) {
            $i += $arr[2];
            array_push($many_denomination['1'], $arr[2]);
            $count -= 1;
        }
    }

    return array(
        '10' => count($many_denomination['10']),
        '5' => count($many_denomination['5']),
        '1' => count($many_denomination['1'])
    );
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?=print_r(count_denomination(10097)); ?>
    </pre>
</body>
</html>