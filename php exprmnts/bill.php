<html>
<body>
<h1>ELECTRICITY BILL</h1>
<form method="post" action="#">
Consumer ID:<input type="number" name="id"><br><br>
Name:<input type="text" name="name"><br><br>
Units Consumed:<input type="number" name="units"><br><br>
<input type="SUBMIT">
<input type="RESET">

</form>
<fieldset>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$id=$_POST["id"];
$name=$_POST["name"];
$units=$_POST["units"];
echo"<h3> KSEB </h3>";
echo"Consumer ID:".$id."<br>";
echo"Consumer Name:".$name."<br>";
echo"Consumer ID:".$units."<br>";
if($units<100)
{
$amt=$units*3;
}
elseif($units>100 && $units<=200)
{
$amt=$units*4;
}
elseif($units>200 && $units<=300)
{
$amt=$units*5;
}
else
{
$amt=$units*5;
}
echo"<h4> Total :Rs.".($amt)."</h4><br>";
}
?>
</fieldset>
</body>
</html>
