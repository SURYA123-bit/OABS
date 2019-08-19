<?php
$firstname = $_REQUEST['firstname'];
$lastname = $_REQUEST['lastname'];
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];





$con = mysqli_connect("localhost","root","","OABS");
// Check connection
 $query = "INSERT into `login` (username, password, firstname, lastname)
VALUES ('$username', '$password', '$firstname', '$lastname')";

$result = mysqli_query($con,$query);
 
        if($result)
        {
     
          echo "success";

         }
         else 
         {
         	echo "failed";
         }
         




?>