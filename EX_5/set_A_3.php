<html>
    <body>
        <form method="post" action="set_A_3.php">
ENTER MARKS:
<input type="text" name="t1">

<input type="submit" value="result">
</form>
</body>
</html>
<?php
$m=$_POST["t1"];
if($m>80){
echo("best...");

}
else if($m>70){
echo("first class...");

}
else if($m>50){
echo("secound class...");

}
else if($m>40){

    echo("pass...");
}
else {

    echo("faillllll..");
}

?>



