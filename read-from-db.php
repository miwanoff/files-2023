<?php
$db = "db.txt";
$f = fopen($db, "r") or die("Ошибка!");

$content = fread($f, filesize($db));

print_r($content);

$a1 = unserialize($content);

print_r($a1);

print_r($a1["a"]);