<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "ipfinal";
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
<style>
input:focus {
  background-color: #f2f2f2;
}
</style>

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
        

        
        echo "<script>alert('You are successfully authenticated!');</script>";
        echo "<script>window.location.href='./ngologin-signup.php';</script>";
	
	
    } 

/*

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
*/

    ?>


<div class="container">
    
        <div class="sign-up" data-aos="zoom-in-up" data-aos-duration="1000"
        data-aos-easing="ease-in-out"> 
        <h1>Sign Up</h1>
            
            <form id="sign-up-data" class="sign-up-data" method="post" action="NGOsignup.php" >
                
                <label for="text" >NGO Name</label>
                <input type="text" id="name" placeholder="Full name" name="NGOName"
                required minlength="2" maxlength="100" />
                <label for="text" >Contact</label>
                <input type="tel" id="phone" placeholder="555-555-5555" name="Contact"
                required pattern="[0-9]{3}[0-9]{3}[0-9]{4}" />
                <label for="text" >Email Address</label>
                <input type="email" id="email" placeholder="email@address.com" name="Email" required />
                <label for="text" >Location</label>
                <textarea type="text" placeholder=" enter location" name="Location"></textarea>
                <label for="text" >Password</label>
                <input type="password" id="password1" placeholder="Create Password (Min. 8 Characters)" name="Password"
                required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$" title="please include 1 uppercase Character,1 lowercase Character and 1 number. "
          />
                <label for="text" >Confirm Password</label>
                <input type="password" id="password2" placeholder="Create Password (Min. 8 Characters)" name="ConfirmPassword"
                required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$" title="please include 1 uppercase Character,1 lowercase Character and 1 number. "
          />
                <button type="submit" name="submitsignup" >SignUp</button>
            </form>
        </div>
    </div>    
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="ngologin-signupScript.js"></script>
</body>
</html>