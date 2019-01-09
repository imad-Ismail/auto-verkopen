<?php
    echo "Inschrijven";
    echo "<br>";
    echo $_POST["firstname"]; 
    echo "<br>";
    echo $_POST["lastname"];
    echo "<br>";
    echo $_POST["email"]; 
    echo "<br>";
    echo $_POST["password"];
    echo "<br>";
    echo $_POST["phone_number"];
    echo "<br>";
    echo $_POST["postalcode"];
    echo "<br>";
    echo $_POST["house_number"]; 

 
    include "db-connection.php";

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phone_number = $_POST["phone_number"];
    $postalcode = $_POST["postalcode"];
    $house_number = $_POST["house_number"];


    try {
            $sql = "INSERT INTO users (firstname, lastname, email, password, phone_number , postalcode , house_number)
            VALUES ('$firstname', '$lastname', '$email', '$password', '$phone_number' , '$postalcode' , '$house_number')";
            // use exec() because no results are returned
            $conn->exec($sql);
            echo "New record created successfully";
        }
    catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }
    
    $conn = null;

    header("Location: login.php");  
?>