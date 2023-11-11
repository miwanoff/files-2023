<?php

$a = ["a" => "aa", "b" => "bb", "c" => array("х" => "хх")];
$st = serialize($a);

echo $st;
$f = fopen("db.txt", "w") or die("Ошибка!");

if (fwrite($f, $st))
   echo "Запис зроблено успішно";
else
   echo "Виникла помилка при запису даних";