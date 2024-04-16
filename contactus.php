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
            cursor: pointer;
            padding: 0;
            margin: 0;
            top: 0;
            position: sticky;
            opacity: 0.8;
            
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
            padding: 5px 2px;
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
           width: 285px;
        }
        .logo li a:hover{
            background-color: red;
        }
        .Phone{
            display: flex;
            background-image: url("HGF.jpg");
            background-repeat: no-repeat;
            width: 700px;
            height: 500px;
            margin: auto;
            top: 0;
            margin-top: 0;
            font-size: 18px;
            align-items: center;
            justify-content: center;
        }
        .Phone a{
            text-decoration: none;
            font-size:25px;
        }
        
    </style>
</head>
<body>
<section class="Firstsection">
    <header>
    <nav class="navbar">
        <ul class="logo">
            <li><a id="tank1" href="papu.php" >Home</a></li>
            <li><a id="tank2" href="Price.php">Price</a></li>
            <li><a id="tank3" href="Rooms.php">Rooms</a></li>
            <li><a id="tank4" href="contactus.php">Contact Us</a></li>
            <div class="search">
                <input type="text" id="search" name="search" placeholder="search">
            </div>
        </ul>
    </nav>
    </header>
    </section>
    <div class="Phone">
    <h1 >Our Reception contact number is....</h1>
    
    <a href="contactus.php">9937434373</a>
    </div>
    <script src="resp.js"></script>
</body>
</html>