<?php

function findMax($array)
{
    $max = $array[0];
    for ($i = 1;$i < count($array);$i++)
    {
        if ($array[$i] > $max)
        {
            $max = $array[$i];
        }
    }
    return $max;
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
$maxValue = findMax($numbers);
echo  "<br/>";
echo "gia tri lon nhat la : " . $maxValue;