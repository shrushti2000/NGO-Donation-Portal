
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="adminstyle.css">
    <style>
        .container{
    position: absolute;
    top: 100px;
    background-color: gray;
    display: flex;
    flex-direction: column;
    margin:80px;
    align-items: center;
    width: 1000px;
    height: 400px;
    border: black;
    box-shadow: 0 5px 30px 10px rgba(0,0,0,0.4);
}

        </style>
</head>
<body>
<div class="container"  data-aos="zoom-in" data-aos-duration="1000">
        <h1>Welcome back Admin!!!</h1>
    <button type="submit"   ><a  href="donatedetails.php" style="text-decoration:none">Donors</a></button>
    <button type="submit"   ><a  href="admindisplayNGO.php" style="text-decoration:none">NGOS</a></button>
           
    
    </div>  
       
    
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
<script src="adminstyle.js"></script>
    
</body>
</html>
