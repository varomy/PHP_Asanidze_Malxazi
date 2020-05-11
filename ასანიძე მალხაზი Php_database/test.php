<?php
$lines=array();
$fp=fopen('basa.txt', 'r');
while (!feof($fp))
{
    $line=fgets($fp);

    //process line however you like
    $line=trim($line,',');

    //add to array
    $lines[]=str_split($line, ",");

}
print_r($lines);
fclose($fp);
?>