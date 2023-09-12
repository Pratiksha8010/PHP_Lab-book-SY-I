<html>
    <body>
        <form method="post" action="set_A_2.php">
ENTER NO1:
<input type="text" name="t1">
<br>
ENTER NO2:
<input type="text" name="t2">
<br>
ENTER CH-1-add<br>2-sub<br>3-div<br>4-mod<br>
<input type="text" name="t3">
<br>
<input type="submit" value="perform">
</form>
</body>
</html>
<?php
$a=$_POST["t1"];
$b=$_POST["t2"];
$ch=$_POST["t3"];
switch($ch){
case 1:
    $c=$a+$b;
    echo("addition of numbers....".$c);
    break;

        
    case 2:
    $c=$a-$b;
    echo("sub of numbers....".$c);
    break;

    
    case 3:
    $c=$a*$b;
    echo("mul of numbers....".$c);
    break;
    
    
    case 4:
    $c=$a/$b;
    echo("division of numbers....".$c);
    break;

    
    case 5:
    $c=$a%$b;
    echo("mod  of numbers....".$c);
    break;

    default:
    echo("plz select correct choice.....");

}

?>