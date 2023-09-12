<html>
<body>
<form method="POST" action="set_C_1.php">
ENTER NUMBER:
<input type="text" name="t1">
<input type="submit" value="digit_in_w">
</form>
</body>
</html>

<?php
$n=$_POST["t1"];
while($n>0){
$d=$n%10;
$n=$n/10;
$r=$r*10+$d;
}

while(int($r>0)){
    $d=$r%10;

    switch($d){

        case 0:
        echo("zero");
        break;
        
        case 1:
            echo("one");
        break;
        
        case 2:
            echo("two");
        break;
        
        case 3:
            echo("three");
        break;
        
        case 4:
        printf("four");
        break;
        
        case 5:
            echo("five");
        break;
        
        case 6:
            echo("six");
        break;
        
        case 7:
            echo("seven");
        break;
        
        case 8:
            echo("eight");
        break;
        
        case 9:
            echo("nine");
        break;
        default:
        echo("enter valid number...");
}

$r=$r/10;
}



?>