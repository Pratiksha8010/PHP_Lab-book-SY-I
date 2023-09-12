<html>
<body>
 <form method="post" action="set_B_1.php">
    ENTER LENGTH:
    <input type="text" name="length"><br>
    ENTER BREADTH:
    <input type="text" name="breadth"><br>
    ENTER HEIGHT:
    <input type="text" name="height"><br>
    <input type="submit" value="area_cal">
    <input type="reset" value="clear">
</body>
</html>
<?php
$l=$_POST["length"];
$b=$_POST["breadth"];
$h=$_POST["height"];
$a=2*(($l*$b)+($l*$h)+($b*$h));
$v=$l*$h;
echo("<br> surface area of cuboid=".$a);
echo ("<br> volume of cuboid=".$v);
?>