<?php

$filename = "ostad.txt";
if(!file_exists($filename)){
    fopen($filename, 'w');
}
$file = fopen($filename, 'r+');

$content = file_get_contents($filename);

echo $content;

fclose($file);

$file = fopen($filename, 'a+');

$current_date = date("Y-m-d H:i:s");

fwrite($file, $current_date."\n");

fclose($file);

