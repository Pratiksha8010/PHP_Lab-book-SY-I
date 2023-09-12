<html>
<body>
<form method="post" action="set_A_3.php">
ENTER TEMP IN CELCIUS:
<input type="text" name="cel">
<input type="submit" value="covert">
</form>
</body>
</html>
<?php
$c=$_POST["cel"];
$f=$c*9/5+32;
echo ("celsius to fahrenheit...".$f);
?>
