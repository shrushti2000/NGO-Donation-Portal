<html>
  <body>

<table width="1000" border="2" class="table table-striped ">
      <thead bgcolor="#8c0100" style="color:white; font-size: 16px;">   
  
      <th>name</th> 
          <th>goods</th> 
          <th>Contact</th> 
          <th>Email</th> 

      </thead>

      <form method="POST" action="donatedetails.php">
      <tbody>
      <?php
        $conn=mysqli_connect("localhost:3307","root@","","main") or die("connection not established");
        
      //  $query=mysqli_query($conn,"select * from ngologin");
        $query1=mysqli_query($conn,"SELECT * FROM ngologin JOIN ngosignin ON ngologin.Name = ngosignin.NGOName");
       
        while($row=mysqli_fetch_array($query1)){
          ?>
          <tr  style="font-size: 16px;">
              
            <td><?php echo $row["Name"]; ?></td>
            <td><?php echo $row["ReceiveGoods"];  ?></td>
            <td><?php echo $row["Contact"];  ?></td>
            <td><?php echo $row["Email"];  ?></td>
            
            </tr>
            
          <?php
        }
        while($row=mysqli_fetch_array($query1)){
          ?>
          <tr  style="font-size: 16px;">
              
          <td><?php echo $Contact=$row['Contact']; ?></td>
            <td><?php echo $Email=$row['Email']; ?></td>
       
            </tr>
          <?php
        }
      
      ?>

      </tbody>
</table>



















</body>
  
    </html> 