<!--<html>

<head>
  <style>
    th ,tr{
       padding: 12px;
       font-size: 16px;
       border:1px solid black;
      }
    td{
      padding: 8px;
      font-size: 15px;
      border:1px solid black;
    
    }
    tr:nth-child(even){
      background-color: #f2f2f2;
    }

    tr:hover{
      background-color: #ddd;
    }
    
  </style>
</head>

<body>
<h2>Have a look at other NGO!!!</h2>
<table width="100%" border="2" class="table table-striped ">
      <thead bgcolor="grey" style="color:white;">   
  
          <th>Name of NGO</th> 
          <th>Goods you want</th> 
          <th>Contact Number</th> 
          <th>Email Id</th> 

      </thead>

      <form method="POST" action="donatedetails.php">
      <tbody>
      <?php
        // $conn=mysqli_connect("localhost","root","","ipfinal") or die("connection not established");
        
      //  $query=mysqli_query($conn,"select * from ngologin");
        // $query1=mysqli_query($conn,"SELECT * FROM ngologin JOIN ngosignin ON ngologin.Name = ngosignin.NGOName");
       
         //while($row=mysqli_fetch_array($query1)){
          ?>
          <tr">
              
            <td><?php  //echo $row["Name"]; ?></td>
            <td><?php  //echo $row["ReceiveGoods"];  ?></td>
            <td><?php  //echo $row["Contact"];  ?></td>
            <td><?php  //echo $row["Email"];  ?></td>
            
            </tr>
            
          <?php
        
       // while($row=mysqli_fetch_array($query1)){
          ?>
          <tr  style="font-size: 16px;">
              
         <td><?php // echo $Contact=$row['Contact']; ?></td>
            <td><?php // echo $Email=$row['Email']; ?></td>
       
            </tr>
          <?php
        
      
      ?>

      </tbody>
</table>



















</body>
  
    </html> 

    !-->



<?php


if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM ngologin JOIN ngosignin ON ngologin.Name = ngosignin.NGOName WHERE CONCAT(Name,ReceiveGoods,Contact,Email) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
else 
{
    $query = "SELECT * FROM  ngologin JOIN ngosignin ON ngologin.Name = ngosignin.NGOName";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect =mysqli_connect("localhost", "root", "", "ipfinal");
    $filter_Result = mysqli_query($connect, $query);
    if (!$filter_Result) {
    printf("Error: %s\n", mysqli_error($connect));
    exit();
}
    return $filter_Result;
}

?>
<html>
<head>



<style>
    th ,tr{
       padding: 12px;
       font-size: 16px;
       border:1px solid black;

      }
    td{
      padding: 8px;
      font-size: 15px;
      border:1px solid black;
    
    }
    tr:nth-child(even){
      background-color: #f2f2f2;
    }

    tr:hover{
      background-color: #ddd;
    }
    

</style>

  </head>
<body>
  
        
        <form action="admindisplayNGO.php" method="post">
    <center>
          <div class="no-print">
            <input type="text" name="valueToSearch" placeholder=" Search here?">&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="submit"  name="search" value="Search">
             </div></center>
           
  <br><br>
   <div class="container"> 
   <table width="100%" border="2" class="table table-striped ">
      <thead  style="color:white;background-color: grey;">
        
                           <th height="40">NAME</th>  
                               <th>ReceiveGoods</th>
                               <th>Contact</th>
                               <th>Email</th>
                             </thead>
      <tbody>
                          <?php while($row = mysqli_fetch_array($search_result)):?>
                              
                   <tr>
                              <td height="28"><?php echo $Name=$row['Name']; ?></td>
                              <td><?php echo $ReceiveGoods=$row['ReceiveGoods']; ?></td>
                              <td><?php echo $Contact=$row['Contact']; ?></td>
                              <td><?php echo $Email=$row['Email']; ?></td>
                              
                   </tr>
                 <?php endwhile;?>
           </tbody>
    </table>
        </form>
        </div>
  
    </body>
</html>    