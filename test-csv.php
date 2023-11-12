<?php

$file = fopen("contacts.csv", "r");
$row = 1;
if (($handle = fopen("contacts.csv", "r")) !== false) {
    while (($data = fgetcsv($handle, 1000)) !== false) {
        $num = count($data); // количество полей в строке
        for ($c = 0; $c < $num; $c++) {
            echo $data[$c] . "\n";
        }
    }
    fclose($handle);
}

$csv = array_map('str_getcsv', file('contacts.csv'));

print_r($csv);

$list = [
    ['aaa', 'bbb', 'ccc', 'dddd'],    
    ['123', '456', '789'],
    ['aaa', 'bbb'],
];

$fp = fopen('file.csv', 'w');

foreach ($list as $fields) {
    fputcsv($fp, $fields);
}
fclose($fp);