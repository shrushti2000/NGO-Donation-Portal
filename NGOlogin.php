<?php
    $host = "localhost:3307";
    $user = "root@";
    $pass = "";
    $db = "ip";
    $conn = mysqli_connect($host, $user, $pass, $db) or die('Error Connecting');
    

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ngologin-signup.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>
<body>

<?php
/*
if(isset($_POST['submitid']))
    {
        $Name=$_POST['Name'];
        $ReceiveGoods=$_POST['ReceiveGoods'];
        $Password=$_POST['Password'];
        
        $query1="INSERT INTO ngologin(Name,Password,ReceiveGoods) VALUES('$Name','$Password','$ReceiveGoods');";
        $res1=mysqli_query($conn,$query1);
        
      
    } 

*/
    if(isset($_POST['submitsignup']))
    {
        $NGOName=$_POST['NGOName'];
        $Contact=$_POST['Contact'];
        $Email=$_POST['Email'];
        $Location=$_POST['Location'];
        $Password=$_POST['Password'];
        $ConfirmPassword=$_POST['ConfirmPassword'];
        $query2="INSERT INTO ngosignin(NGOName,Contact,Email,Location,Password,ConfirmPassword) VALUES('$NGOName','$Contact','$Email','$Location','$Password','$ConfirmPassword');";
        $res2=mysqli_query($conn,$query2);
        
      
    } 



if(count($_POST)>0) {
	$result = mysqli_query($conn,"SELECT * FROM ngosignin WHERE Password = '". $_POST["Password1"]."'and NGOName= '". $_POST["NGOName1"]."'");
	$count  = mysqli_num_rows($result);
	if($count==0) {
		echo "<script>alert('Invalid RollNo or Password!!');</script>";
		
		echo "<script>window.location.href='./ngologin-signup.php';</script>";
		exit();
		//$message = "Invalid Username or Password!";
	} else
		echo "<script>alert('You are successfully authenticated!');</script>";
		echo "<script>window.location.href='./ngologin-signup.php';</script>";
									
}


    ?>


    <div class="container">
        <div class="login" data-aos="zoom-in-up" data-aos-duration="1000"
        data-aos-easing="ease-in-out">
            <h1>Login</h1>
            <form  id="login" class="login-data" method="post" action="ngologin-signup.php">
                <label for="text" >NGO Name</label>
                <input type="text" id="ngo-name" placeholder="Full name" name="NGOName1"
                required minlength="2" maxlength="100" />
                
                <label for="text" >What you need</label>
                <input type="text" id="ngo-name" placeholder="what you what to receive" name="ReceiveGoods"
                required minlength="2" maxlength="100" />
              
                <label for="text" >Password</label>
                <input type="password" id="ngo-password" placeholder="Create Password (Min. 8 Characters)" name="Password1"
                required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$" title="please include 1 uppercase Character,1 lowercase Character and 1 number. "
          />
                <button type="submit" name="submitid">Login</button>
            
            </form>
        </div>
        
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="ngologin-signupScript.js"></script>
</body>
</html>