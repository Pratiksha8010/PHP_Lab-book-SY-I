<html>
<body>
<form method="post" action="set_B_3.php">
ENTER NUMBER:
<input type="text" name="t1">
<input type="submit" value="reverse">
</form>
</body>
</html>
<?php
$n=$_POST["t1"];

while( (int)$n>0){
$d=$n%10;
echo($d);
$n=$n/10;
}

?>