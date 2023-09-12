<html>
<body>
<form method="get" action="set_B_3.php">
    ENTER PHP MARK'S:
    <input type="text" name="m1"><br>
    ENTER DS MARK'S:
    <input type="text" name="m2"><br>
    ENTER DM MARK'S:
    <input type="text" name="m3"><br>
    ENTER SE MARK'S:
    <input type="text" name="m4"><br>
    ENTER BG MARK'S:
    <input type="text" name="m5"><br>
    <input type="submit" value="P_calculate">
    <input type="reset" value="clear">
</form>
</body>
</html>

<?php
$sum=0;
$p=$_GET["m1"];
$ds=$_GET["m2"];
$dm=$_GET["m3"];
$se=$_GET["m4"];
$js=$_GET["m5"];

$sum= $sum+$p+$ds+$dm+$se+$js;
$marks=$sum/5;
echo("per....".$marks);
?>





