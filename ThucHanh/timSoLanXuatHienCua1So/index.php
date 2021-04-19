<?php

function findNumber($array,$value)
{
    $count = 0;
    for ($i = 0;$i < count($array);$i++)
    {
        if ($array[$i] == $value)
        {
            $count++;
            $i++;
        }
    }
    return $count;
}

$numbers = [];
$value = 68;
$count = 0;
for ($i = 0;$i < 150;$i++)
{
    $numbers[$i] = rand(1,150);
}
foreach ($numbers as $number)
{
    echo $number . " ";
}
$countValue = findNumber($numbers,$value);
echo "<br/>";
echo "Co $countValue so $value ";

