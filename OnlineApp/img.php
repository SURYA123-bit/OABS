<?php  
 $connect = mysqli_connect("localhost", "root", "", "OABS");  
 if(isset($_POST["insert"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $description = $_POST['description'];
      $location = $_POST['location'];
      $cost = $_POST['cost'];
      $contact = $_POST['contact'];
      $query = "INSERT INTO tbl_images(name,description,cost,location,contact) VALUES ('$file','$description','$cost','$location','$contact')";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html> 
 <style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #188bf7;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: ##188bf7;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style> 
      <head>  
           <title> View Post </title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">Post your ADD</h3>  
                <br />  
                <form method="post" enctype="multipart/form-data">
                  <label>Description</label>
                      <input type="text" id="description" name="description" placeholder="Please enter product description">

                      <label >Location</label>
                      <input type="text" id="location" name="location" placeholder="Your location">
                    
                    <label >Cost</label>
                      <input type="text" id="cost" name="cost" placeholder="Product cost">

                      <label >Contact</label>
                      <input type="text" id="contact" name="contact" placeholder="Please enter your contact number">
  
                     <input type="file" name="image" id="image" />  
                     <br />  
                     <input type="submit" name="insert" id="insert" value="submit" class="btn btn-info" />  
                </form>  
                <br />  
                <br />  
               
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  