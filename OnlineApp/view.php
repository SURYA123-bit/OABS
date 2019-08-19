<?php  
 $connect = mysqli_connect("localhost", "root", "", "OABS");  
 
  
       
      //if(mysqli_query($connect, $query))  
     
 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Insert and Display Images From Mysql Database in PHP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">Insert and Display Images From Mysql Database in PHP</h3>  
                <br />  
                <form method="post" enctype="multipart/form-data">
                 
  
                </form>  
                <br />  
                <br />  
                <table class="table table-bordered">  
                     <tr>  
                          <th>Image</th>  
                          <th>Description</th>
                          <th>location</th>
                          <th>cost</th>
                          <th>contact</th>
                     </tr>  
                <?php  
                $query = "SELECT * FROM tbl_images ORDER BY id DESC";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                 
                 echo "<tr>";
                              
             echo   ' <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" class="img-thumnail" />  
                               </td>  ';
                               
                echo "<td>" . $row['description'] . "</td>";
                echo "<td>" . $row['location'] . "</td>";
                echo "<td>" . $row['cost'] . "</td>";
                echo "<td>" . $row['contact'] . "</td>";
                 echo "</tr>";
















                     // echo  
                     //      <tr>  
                     //           <td>  
                     //                <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" class="img-thumnail" />  
                     //           </td>
                     //           <td>  
                     //                $row["description"]. <br>;
                     //           </td>  
                     //            <td>  
                     //               echo "location: " . $row["location"].<br>";
                     //           </td> 
                     //            <td>  
                     //               echo "cost: " . $row["cost"].<br>";
                     //           </td> 
                     //           <td>  
                     //               echo "contact: " . $row["contact"].<br>";
                     //           </td> 
                               
                     //      </tr>  
                     // ;  
                }  
                ?>  
                </table>  
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
© 2019 GitHub, Inc.