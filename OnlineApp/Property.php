<?php

$username = $_POST['username'];
$password = $_POST['password'];





$con = mysqli_connect("localhost","root","","OABS");
// Check connection

 $query = "select * from login where username='$username' and password= '$password'";

$result = mysqli_query($con,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
        if($rows==1){
     
           echo "success";
           header("Location: Home page.html");
    
         }

else{
	echo "Failed";
}
?>