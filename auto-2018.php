<?php

    $sql = "SELECT merk, model, Img, PRIJS , bouwjaar FROM autos WHERE Bouwjaar='2018'";
    
    $data = $conn->query($sql);     

    
    foreach ($data as $row)
    {   
        $htmlOutput  = "";         
        $htmlOutput  = '<div class="card">';

        $htmlOutput  .= '<a href="' . $row['merk'] . '-index.php' . '">';

        $htmlOutput .= '<img src="' . $row['Img'] . '" alt="' . $row['merk'] . '" style="width:100% ; height:100% ; ">';

        $htmlOutput  .= ' </a>';

        $htmlOutput .= '<h1 style="text-align: center ;">'. $row['merk']  .'</h1>';
        $htmlOutput .= '<h2 style="text-align: center ; color: rgb(0,0,0,.7);">'. $row['model'] . '</h2>';
        $htmlOutput .= '<p class="title" style="text-align: center;">' . $row['PRIJS'] . '</p>';
        $htmlOutput .= '<p style="text-align: center;">' . $row['bouwjaar'] . '</p>';
        $htmlOutput .= '</div>';  




        echo $htmlOutput;
    }  
  
?>