<?php

$username = $_POST['username'];
$password = $_POST['password'];



$username = stripclashes($username);
$password = stripclashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);


mysql_connect("localhost","root","");
mysql_select_db("OABS")

$result=mysql_query("select * from login where username='$username' and password= '$password'")
or die("Failed to Query Database",mysql_error());
$row=mysql_fetch_Array($result);
if($row['username']==$username && $row['password']==$password){
	 echo "loginsucess"
}
else{
	echo "Failed";
}
?>