<html>
<head>
</head>
<body>

<?php
$basa_ge = fopen("basa.txt", "a");
fwrite($basa_ge, $_GET['us']."-".$_GET['ge'].",");
fclose($basa_ge);  

?>
<h3>Shetanilia</h3>
<?php
echo $_GET['us']."-".$_GET['ge'] ?>
<br><br><br>
<input type="button" onclick="location.href = 'basa.php'" value='ukan'>

</body>
</html>