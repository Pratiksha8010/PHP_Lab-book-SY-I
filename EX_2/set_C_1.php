<html>
<body>
    <form method="POST" action="set_C_1.php">
        <h2 align="center">AIR Ticket Reservation</h2>
        <br>
    
        name:
        <input type="text" name="t1">
        <br>
        address:
        <input type="text" name="t2">
        <br>
        number:
        <input type="number" name="t3">
        <br>
        date of journey:
        <input type="date" name="t4">
        <br>
        price of ticket:
        <input type="text" name="t5">
          <br>
          submit here
        <input type="submit">

</form>
</body>
</html>
<?php
$m1=$_POST["t1"];
$m2=$_POST["t2"];
$m3=$_POST["t3"];
$m4=$_POST["t4"];
$m5=$_POST["t5"];

echo("name=".$m1);
echo("<br>address=".$m2);
echo("<br>number=".$m3);
echo("<br>date of journey=".$m4);
echo("<br>price of tiket=".$m5);



?>