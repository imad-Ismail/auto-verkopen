<?php
    $sql = "SELECT * FROM autos WHERE merk='Mercedes'";
    
    
    $data = $conn->query($sql);   

    
    foreach ($data as $row)
    {   
        $htmlOutput  = "";         
        $htmlOutput  = '<div class="card">';

        $htmlOutput .= '<img src="' . $row['Img'] . '" alt="' . $row['Merk'] . '" style="width:100% ; height:100% ; ">';

        $htmlOutput .= "";  

        $htmlOutput .= "<table class='table'>";

        $htmlOutput .= "<tr class='th td'>";
        $htmlOutput .= "<th class='th td'>" . ' Merk ' . "</th>" ;
        $htmlOutput .= "<th class='th td'>" . ' Model ' . "</th>" ;
        $htmlOutput .= "<th class='th td'>" . ' PRIJS ' . "</th>" ;
        $htmlOutput .= "<th class='th td'>" . ' Carrosserie ' . "</th>" ;
        $htmlOutput .= "<th class='th td'>" . ' Brandstof ' . "</th>" ;
        $htmlOutput .= "<th class='th td'>" . ' Bouwjaar ' . "</th>" ;
        $htmlOutput .= "<th class='th td'>" . ' Kleur ' . "</th>" ;
        $htmlOutput .= "</tr>";

        $htmlOutput .= "<tr class='tr'>";
        $htmlOutput .= "<td class='th td'>" . $row['Merk'] . "</td>" ;
        $htmlOutput .= "<td class='th td'>" . $row['Model'] . "</td>" ;
        $htmlOutput .= "<td class='th td'>" . $row['PRIJS'] . "</td>" ;
        $htmlOutput .= "<td class='th td'>" . $row['Carrosserie'] . "</td>" ;
        $htmlOutput .= "<td class='th td'>" . $row['Brandstof'] . "</td>" ;
        $htmlOutput .= "<td class='th td'>" . $row['Bouwjaar'] . "</td>" ;
        $htmlOutput .= "<td class='th td'>" . $row['Kleur'] . "</td>" ;
        $htmlOutput .= "</tr>";

        $htmlOutput .= "</table>";

        $htmlOutput .= '</div>';   


        echo $htmlOutput;
    }  
  
?>