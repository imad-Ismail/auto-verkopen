<?php 
    include "db_connection.php";    
?>

<!DOCTYPE html>
<html>

    <head>
        <title>MySQL PHP</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/marktplaats.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
        <div class="nav"> 
            <nav>
                <img src="img/image.png">
            </nav>
        </div>

        <div class="navbar navbar1">
  <a class="spec " href="http://localhost/php/">Home</a>
  <a  class="spec" href="News-index.php" >News</a>

    <div class="dropdown1">
    <button  class="dropbtn1 spec1">Prijs 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown1-content1">
      <a class="speclink1" href="index-order-prijs.php">Prijs van hoog naar laag</a>
      <a class="speclink1" href="index-order-prijs-laag.php">Prijs van laag naar hoog</a>
      <!-- <a class="speclink1" href="index-auto-2016.php">DDD</a> -->
    </div>
    </div>


  <div class="dropdown">
    <button  class="dropbtn spec2">Bouwjaar 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a class="speclink" href="index-auto-2018.php">2018</a>
      <a class="speclink" href="index-auto-2017.php">2017</a>
      <a class="speclink" href="index-auto-2016.php">2016</a>
    </div>
  </div> 
</div>


<div id="main">




    <?php include "car.php"; ?>



</div>


    </body>

</html>