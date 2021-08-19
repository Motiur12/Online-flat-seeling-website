<?php  
 $connect = mysqli_connect("localhost", "root", "", "onlineflatselling");  
 $sql = "SELECT seller.id,district,size,prize,rooms,floor,image FROM ((seller inner join property on seller.id=property.pid) inner join flat on flat.fid=property.pid) inner join images on images.imid=seller.id order by id asc "; 
 $result = mysqli_query($connect, $sql);
 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Fetch Data from Two or more Table Join using PHP and MySql</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:500px;">  
                <h3 align="">Fetch Data from Two or more Table Join using PHP and MySql</h3><br />                 
                <div class="table-responsive">  
                     <table class="table table-striped">  
                          <tr>  
                               <th>id</th>  
                               <th>district</th>
							   <th>size</th>
							   <th>prize</th>
							   <th>rooms</th>
							   <th>floors</th>
							   <th>image</th>
							   
							   
                          </tr>
						  
                          <?php  
                          if(mysqli_num_rows($result) > 0)  
                          {  
                               while($row = mysqli_fetch_array($result))  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["id"];?></td>  
                               <td><?php echo $row["district"]; ?></td>
							   <td><?php echo $row["size"]; ?></td>
							   <td><?php echo $row["prize"]; ?></td>
							   <td><?php echo $row["rooms"]; ?></td>
							   <td><?php echo $row["floor"]; ?></td>
							   <td><img src="<?php echo $row["image"]; ?>" class="img-responsive" /> </td>
							   
                          </tr>  
                          <?php  
                               }  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
           <br />  
      </body>  
 </html>  
