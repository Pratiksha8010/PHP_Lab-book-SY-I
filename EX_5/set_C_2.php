<html>
    <body>
        <form method="post" action="set_C_2.php">
SELECT DAY:<br>
1-sun<br>2-mon<br>3-tue<br>
4-wed<br>5-thr<br>6-fri<br>7-sat
<input type="text" name="t1">
<input type="submit" value="look_bgcolor">
</form>
</body>
    </html>

    <?php
    $d=$_POST["t1"];
    switch($d){
case "sun":
    echo("<body bgcolor='red'>");
    break;
case "mon":
    echo("<body bgcolor= 'skyblue'>");
    break;
case "tue":
    echo("<body bgcolor='pink'>");
    break;
case "web":
    echo("<body bgcolor='black'>"); 
    break;
case "thr":
    echo("<body bgcolor='green'>"); 
    break;
case "fri":
    echo("<body bgcolor='black'>");
    break;
case "sat":
    echo("<body bgcolor='orange'>");                      
    break;
default:
echo("<h1>Invalid day....</h1>");    
    }
    
?>