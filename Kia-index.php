<?php 
    include "db_connection.php";    
?>

<!DOCTYPE html>
<html>

    <head>
        <title>MySQL PHP</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/appartauto.css">
        <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Mono" rel="stylesheet">
    </head>

    <body>


        <div class="nav"> 
            <nav>
                <img src="img/image.png">
            </nav>
        </div>

    <div class="navbar">

          <a class="spec " href="http://localhost/php/">Home</a>
          <a class="spec" href="News-index.php">News</a>

    </div>
    <div>
        <p style="width: 500px;
    height: 300px;
    position: absolute;
    top: 78px;
    right: -283px;
    font-size: 25px;
    border-radius: 65px 65px 65px 65px;
    z-index: 2; color: white">
            Imad Ismail
        </p>
        
        <img id="colorlog" src="img/logo-naam/kia-pe.png" style="width: 500px;
height: 300px ;
position: absolute ;
top: -135px;
right: -200px; border-radius: 65px 65px 65px 65px;
transform: rotate(140deg);
z-index: 1">
        
    </div>

        <div>
        
</div>


<div id="main">

    <div>
        

    <?php include "Kia.php"; ?>


    <?php include "Tim .php"; ?>







    </div>

</div>


    </body>

</html>