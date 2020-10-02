<?php


if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM ngologin JOIN ngosignin ON ngologin.Name = ngosignin.NGOName WHERE CONCAT(Name,ReceiveGoods,Contact,Email,) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
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
    <meta charset="utf-8">
  <title>Data Entry Report</title>

  <style>

.body {margin:0;}

@page { size: auto;}

.icon-bar {
  width: 100%;
  margin-top:-52px;
  overflow: auto;
}

.icon-bar a {
  float: right;
  width: 5%;
  text-align: center;
  padding: 6px 0;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
  margin-top: 4px;
}
.iconbar-right a{
  float: left;
  width: 5%;
  text-align: center;
  padding: 6px 0;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
}

.icon-bar a:hover {
  background-color: #000;
}

.active {
  background-color: #8C0100;
}
@media print
{    
    .no-print, .no-print *
    {
        display: none !important;
    }
}
</style>

  </head>
<body>
  
        
        <form action="datareport.php" method="post">
    <center>
          <div class="no-print">
            <input type="text" name="valueToSearch" placeholder=" Search here?">&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="submit" class="btn btn-primary" name="search" value="Search">
             <button class="btn btn-primary" style="float:right;" onclick="window.print()">
              <span class="glyphicon glyphicon-print" aria-hidden="true"></span>&nbsp;&nbsp;Print</button>
            </div></center>
           
  <br><br>
   <div class="container"> 
   <table width="1000" border="2" class="table table-striped ">
      <thead bgcolor="#8c0100" style="color:white; font-size: 16px;">
        
                           <th height="40">NAME</th>  
                               <th>ReceiveGoods</th>
                               <th>Contact</th>
                               <th>Email</th>
                             </thead>
      <tbody>
                          <?php while($row = mysqli_fetch_array($search_result)):?>
                              
                   <tr bgcolor="#ef8b8b"  style="font-size: 15px;">
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