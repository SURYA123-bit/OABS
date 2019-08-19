 <?php 
 $connect = mysqli_connect("localhost", "root", "", "OABS");  
  <table class="table table-bordered">  
                     <tr>  
                          <th>Image</th>  
                     </tr>  
                <?php  
                $query = "SELECT * FROM tbl_images ORDER BY id DESC ";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" class="img-thumnail" />  
                               </td>  
                               <td>  
                                     echo "deescription: " . $row["description"]. " - location: " . $row["location"]. " " . <br>";
                               </td>  
                          </tr>  
                     ';  
                }  
                ?>  
                </table>   