<?php
if(isset($_POST['name'])){
$server = "localhost";
$username = "root";
$password = "";

 
$con = mysqli_connect($server, $username, $password);
if(!$con){
    die("connection failed". mysqli_connect_error());
}
//echo "passed";

$name = $_POST['name'];
$age= $_POST['age'];
//echo "<pre>";print_r($_POST);

$sql = "INSERT INTO `oyo`.`oyo` (`name`, `age`) VALUES ('".$name."', ".$age.");";

  if($con->query($sql) == true)
{
    
   // echo "Thanks for submiting the form";
}
else{
    //echo "ERROR: $sql <br> $con->error";

}
$con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="responsive.css">
    <style>
        .Firstsection{
            background-color:white; 
            background-image: url(jkl.jpg);
            border-radius: 20px;
            align-items: center;
            height: 9vh;
            width: 100%;
            cursor: pointer;
            padding: 0;
            margin: 0;
            top: 0;
            position: sticky;
            opacity: 0.8;
            
        }
        .container{
            background-image: url("drm.jpg");
            border-radius: 23px;
            background-repeat: no-repeat;
            width: 100%;
            height: 120vh;
            
        }
        form{
            justify-content: center;
            flex-direction: column;
            display: flex;
            align-items: center;
            font-size: 45px;
        }
        .h1{
            color: green;  
        }
        .h2{
            font-style: italic;
            color: red;
        }
        input{
            border-radius: 23px;
            width: 32%;
            margin: 5px;
            font-size: 17px;
        }
        button{
            border-radius: 23px;
            font-size: 20px;
            background-color: green;
            color: white;
            margin-top: 5px;
            padding: 8px;
            cursor: pointer;         
        }
        .logo li a:hover{
            background-color: red;
             
        }
        .navbar ul{
            overflow: auto;

        }
        .navbar li{
            color: white;
            float:left ;
            list-style: none;
            padding: 8px 10px;
            margin: 6px;
        }
        .navbar li a{
            margin-top: 5px;
            padding: 8px 4px ;
            text-align: center;
            text-decoration: none;
            color: white;
            
        }
        .search{
           float: right;
           padding: 12px 74px;
           color: white;
           font-size: 17px;
           border-radius: 23px;
           width: 253px;
        }
        #box1{
            padding-top: 3px;
            color:white;
        }
        #box2{
            padding-top: 3px;
            color: white;
        }
        #box3{
            padding-top: 3px;
            color: white;
        }
        #box4{
            padding-top: 8px;
            color: white;
        }
        
        .navbar li{
            flex-direction: column;
        
        }

    </style>
    
</head>
<body>
    <section class="Firstsection">
    <header>
    <nav class="navbar v-clss-resp">
        <ul class="logo">
            <li><a id="box1" href="papu.php" >Home</a></li>
            <li><a id="box2" href="Price.php">Price</a></li>
            <li><a id="box3" href="Rooms.php">Rooms</a></li>
            <li><a id="box4" href="contactus.php">Contact Us</a></li>
            <li><a id="box5" href="phone.php">9040889732</a></li>
            
            <div class="search v-clss-resp">
                <input type="text" id="search" name="search" placeholder="search">
            </div>
        </ul>
    </nav>
    <div class="burger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
    </header>
    </section>
    <!-- <p class="para"><marquee behavior="scroll" direction="right">Greenland Resort is one of the best place for pool party with luxurious rooom in Bhubaneswar</marquee></p> -->
    <section class="Secondsection">
    <div class="container">
        <br>
        
    <h1 class="h1 h-nav-resp"><center>Greenland Resort</center></h1>
    <h2 class="h2 h-nav-resp"><center>Pre-booking Form</center></h2>

    <form action="papu.php" method="post">
        <input type="text" name="name" id="name" placeholder="enter your name" required>
        <input type="text" name="age" id="age" placeholder="enter your age" required>
        <input type="text" name="phone" id="phone" placeholder="enter your phone number" required>
        <button class="btn">Submit</button>
    </form>
</div>
</section>

<script src="resp.js"></script>

</body>
</html>
