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
        #cont{
            width: 600px;
            height: 300px;
            color: red;
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
    <h1 id="cont">Contact us through this number 9040889732</h1>
    </section>

    <script src="resp.js"></script>
</body>
</html>