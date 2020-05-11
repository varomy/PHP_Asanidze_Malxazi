<?php
$myfile = fopen("basa.txt", "r");
echo fread($myfile,filesize("basa.txt"));
fclose($myfile);
?>
<input type="button" onclick="location.href = 'basa.php'" value='ukan'>