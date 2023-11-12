<?php
$weather_json = file_get_contents('https://api.openweathermap.org/data/2.5/weather?q=Kharkiv,ua&APPID=89ea4480f451ffd24b79617df1ba2bb0');

echo $weather_json;

$weather = json_decode($weather_json);

print_r($weather->main->temp);