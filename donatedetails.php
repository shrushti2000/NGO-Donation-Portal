<html>
  <body>
  <table width="1000" border="2" class="table table-striped ">
      <thead bgcolor="#8c0100" style="color:white; font-size: 16px;">   
  
          <th>Name</th>
            <th >Phone</th>
            <th>Email</th>
            <th>Address</th>
            <th>Goods</th>
           
      </thead>

      <form method="POST" action="donatedetails.php">
      <tbody>
      <?php
        $conn=mysqli_connect("localhost:3307","root@","","ip") or die("connection not established");
        
        $query=mysqli_query($conn,"select * from donar");
        while($row=mysqli_fetch_array($query)){
          ?>
          <tr  style="font-size: 16px;">
              
            <td><?php echo $Name=$row['Name']; ?></td>
                    <td><?php echo $Phone=$row['Phone']; ?></td>
                       <td><?php echo $Email=$row['Email']; ?></td>
                    <td><?php echo $Address=$row['Address']; ?></td>
                    <td><?php echo $Goods=$row['Goods']; ?></td>
            </tr>
          <?php
        }
      
      ?>
      </tbody>
</table>
</body>
  
    </html> 