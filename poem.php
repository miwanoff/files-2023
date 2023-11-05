<?php
$path = "poems";
if (!is_dir($path)) {
    mkdir($path);
}
$str_b = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>';

$str_e = '</body>
</html>';
$f = fopen("poem.txt", "r");
//$content = fread($f, filesize("poem.txt"));
$arr = file("poem.txt");
//print_r($arr);
//echo $content ;
$content = implode("\n", $arr);
$h = fopen($path."/poem.html", "w");

//$text = $str_b . "\n" . $content . "\n" . $str_e;

// if (fwrite($h, $text))
//    echo "Запис зроблено успішно";
// else
//    echo "Виникла помилка при запису даних";

fwrite($h, $str_b);
fwrite($h, $content);
fwrite($h, $str_e);
fclose($h);

//echo realpath("../../../..");

//echo basename($path."/poem.html");
//echo dirname($path."/poem.html");

// if ($handle = opendir('..')) { //обход родительского каталога
//     echo "Дескриптор каталога: $handle\n";
//     echo "Записи:\n";
//     while (false !== ($entry = readdir($handle))) {//чтение каталога
//       echo "$entry\n";
//     }
//     closedir($handle);
//    }

$my_path = "poems";
if (is_dir($my_path)) { // якщо існує папка "poems"
    $files = scandir($my_path, 1); // отримуємо масив назв файлів, що містяться в папці "poems"
    for ($i = 0; $i < count($files); $i++) { // проходимо по масиву назв файлів
        if ($files[$i] != '.' && $files[$i] != '..') { // крім поточної та батьківської директорії           
            echo $files[$i]  . "\n";            
     }
  }
}