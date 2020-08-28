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
     



if(count($_POST)>0) {
	$result = mysqli_query($conn,"SELECT * FROM ngosignin WHERE Password = '". $_POST["Password"]."'and NGOName= '". $_POST["NGOName"]."'");
	$count  = mysqli_num_rows($result);
	if($count==0) {
		echo "<script>alert('Invalid RollNo or Password!!');</script>";
		
		echo "<script>window.location.href='./ngologin-signup.php';</script>";
		exit();
		//$message = "Invalid Username or Password!";
	} else
		echo "<script>alert('You are successfully authenticated!');</script>";
		echo "<script>window.location.href='./donatedetails.php';</script>";
									
}


 ?>


    <div class="container">
        <div class="login" data-aos="zoom-in-up" data-aos-duration="1000"
        data-aos-easing="ease-in-out">
            <h1>Login</h1>
            <form  id="login" class="login-data" method="post" action="ngologin-signup.php">
                <label for="text" >NGO Name</label>
                <input type="text" id="ngo-name" placeholder="Full name" name="NGOName"
                required minlength="2" maxlength="100" />
                
                <label for="text" >What you need</label>
                <input type="text" id="ngo-name" placeholder="what you what to receive" name="ReceiveGoods"
                required minlength="2" maxlength="100" />
              
                <label for="text" >Password</label>
                <input type="password" id="ngo-password" placeholder="Create Password (Min. 8 Characters)" name="Password"
                required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$" title="please include 1 uppercase Character,1 lowercase Character and 1 number. "
          />
                <button type="submit" name="submitid">Login</button>
                <a href="NGOsignup.php" style="text-decoration:none;color:white">Make new account!!</a>
            
            </form>
        </div>
        
     <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="ngologin-signupScript.js"></script>
    <?php
    if(isset($_POST['submitid']))
    {
        $Name=$_POST['NGOName'];
       $ReceiveGoods=$_POST['ReceiveGoods'];
        $Password=$_POST['Password'];
        $query2="INSERT INTO ngologin(Name,ReceiveGoods,Password) VALUES('$Name','$ReceiveGoods','$Password');";
        $res2=mysqli_query($conn,$query2);
        
      
    }
    ?>
</body>
</html>