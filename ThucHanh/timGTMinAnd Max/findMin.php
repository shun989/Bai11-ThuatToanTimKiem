<?php

function findMin($array)
{
    $min = $array[0];
    for ($i = 1;$i < count($array);$i++)
    {
        if ($array[$i] < $min)
        {
            $min = $array[$i];
        }
    }
    return $min;
}

$numbers = [];
for ($i = 0;$i < 100;$i++)
{
    $numbers[$i] = rand(1,100);
}
foreach ($numbers as $number)
{
    echo $number . " ";
}
$minValue = findMin($numbers);
echo "<br/>";
echo "gia tri nho nhat la: " . $minValue;
