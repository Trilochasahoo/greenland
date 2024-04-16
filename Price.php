<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        .main{
            display: flex;
            justify-items: center;
            align-items: center;
            margin-top: 200px;
            margin-left: 50px;
            
        }
        .main h1{
            color: blue;
            font-size: 30px;
            padding: 30px;

        }
        .logo li a:hover{
            background-color: red;
        }
        .item{
            font-size: small;
            border-left: dashed;
        }
        #box1{
            height: 23px;
            width: 750px;
            background-color: aqua;
            margin-left: 15px;

        }
        #box2{
            height: 23px;
            width: 700px;
            font-size: medium;
            background-color: yellow;
            margin-left: 15px;
        }
        #box3{
            height: 23px;
            width: 700px;
            font-size: medium;
            background-color: greenyellow;
            margin-left: 15px;
            
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
    <div class="main">
        <h1>Price Details </h1>
        <div class="item">
            <h2 id="box1">Classic Rooms 1500/- </h2>
            <h3 id="box2">Swooming pool Include 2500/- </h3>
            <h4 id="box3">Premium Rooms 2000/-</h4>

        </div>



    </div>

    
</body>
</html>