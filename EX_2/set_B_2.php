<html>
<body>
<form method="post" action="set_B_2.php">
ENTER VALUE OF RADIUS:
<input type="text" name="t1"><br>
ENTER VALUE OF SIDE:
<input type="text" name="t2"><br>
ENTER VALUE HEIGHT:
<input type="text" name="t3"><br>
<input type="submit" value="cal..">
<input type="reset" value="clear">
</form>
</body>
</html>
<?php
$r=$_POST["t1"];
$s=$_POST["t2"];
$h=$_POST["t3"];

$c=3.14*$r*$r;
$s1=$s*$s;
$r=$s*$h;
echo("area of circle....".$c);
echo(" <br> area of square....".$s1);
echo(" <br> area of rectrangle....".$r);
?>





