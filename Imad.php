<?php
    $sql = "SELECT * FROM klant WHERE voornaam='Imad'";
    
    
    $data = $conn->query($sql);   

    
    foreach ($data as $row)
    {   
        $htmlOutput  = "";         
        $htmlOutput  = '<div class="card">';
        $htmlOutput .= "";

        $htmlOutput .= "<table class='tklant'>";
        $htmlOutput .= "<tr class='th td'>";
        $htmlOutput .= "<th class='th td'>" . ' Voornaam ' . "</th>" ;
        $htmlOutput .= "<th class='th td'>" . ' Achternaam ' . "</th>" ;
        $htmlOutput .= "<th class='th td'>" . ' Telefoonnummer ' . "</th>" ;
        $htmlOutput .= "<th class='th td'>" . ' E-mail ' . "</th>" ;
        $htmlOutput .= "<th class='th td'>" . ' Plaats ' . "</th>" ;
        $htmlOutput .= "</tr>";

        $htmlOutput .= "<tr class='tr'>";
        $htmlOutput .= "<td class='th td'>" . $row['voornaam'] . "</td>" ;
        $htmlOutput .= "<td class='th td'>" . $row['achternaam'] . "</td>" ;
        $htmlOutput .= "<td class='th td'>" . $row['telefoonnummer'] . "</td>" ;
        $htmlOutput .= "<td class='th td'>" . $row['email'] . "</td>" ;
        $htmlOutput .= "<td class='th td'>" . $row['plaats'] . "</td>" ;
        $htmlOutput .= "</tr>";

        $htmlOutput .= "</table>";

        $htmlOutput .= '</div>';   


        echo $htmlOutput;
    }  
  
?>