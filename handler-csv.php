<?php

$fh = fopen('data/products_export.csv', 'r');

$counter = 0;
$keys = fgetcsv($fh, 10000);
$result = [];

while(($row = fgetcsv($fh, 10000)) !== FALSE)
{
    $result[] = array_combine($keys, $row);
}

fclose($fh);

foreach($result as $index => $row)
{
    if($row['author'] == 'Alan Barnes')
    {
        $result[$index]['author'] = 'John Doe';
    }
}

$fh = fopen('data/products_export.csv', 'w');

fputcsv($fh, $keys);
foreach($result as $row)
{
    fputcsv($fh, $row);
}

fclose($fh);

echo "<pre>";
var_dump($result);
echo "<pre>";