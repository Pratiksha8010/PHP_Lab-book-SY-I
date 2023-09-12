<html>
    <body>
        <form method="post" action="set_A_1.php">
ENTER YEAR:
<input type="text" name="t1">
<input type="submit" value="check_leap_or_no">
</form>
</body>
</html>
<?php 
$y=$_POST["t1"];
if  ($y%400==0){
echo("year is leap....");
}
else{
   echo("year is not leap....");
}


?>