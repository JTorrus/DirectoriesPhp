<html>
<head>
    <title>Fusió de fitxers</title>
</head>
<body>
<?php
include("fusio_directoris.inc");
include("constants.inc");

llistat_directoris(DIRECTORI_BASE);
?>
<br>
<div>Escriviu el nom dels dos directoris a fusionar</div>
<br>
<form method="post" action="fusiona.php">
    <div>Nom del primer directori a fusionar:</div>
    <div><input type="text" name="dir1" size=50></div>
    <br>
    <div>Nom del segon directori a fusionar:</div>
    <div><input type="text" name="dir2" size=50></div>
    <br>
    <div>Nom de directori fusionat:</div>
    <div><input type="text" name="dirfusionat" size=50></div>
    <br>
    <div><input type="submit" name="submit" value="fusiona"></div>
</form>
</body>
</html>
