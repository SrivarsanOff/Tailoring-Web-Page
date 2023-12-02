<?php
$a=$_REQUEST['name'];
$b=$_REQUEST['email'];
$c=$_REQUEST['city'];
$d=$_REQUEST['password'];
$con=mysql_connect("localhost","root","");
mysql_select_db("reg");
mysql_query("insert into cust(name,email,city,password) values('$a','$b','$c','$d')");
echo("Successfully Registered... :)");
include("register.php");
mysql_close($con)
?>