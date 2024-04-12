<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if(isset($_POST['Name'],$_POST['Location'],$_POST['GSTIN'], $_POST['Email'], $_POST['Contact'])) {
        $Name = $_POST['Name'];
        $Location = $_POST['Location'];
        $GSTIN = $_POST['GSTIN'];
        $Email =  $_POST['Email'];
        $Contact =  $_POST['Contact'];


        $servername = "localhost";
        $username = "id21897647_nbs";
        $password = "Nbs@1234";
        $dbname = "id21897647_nbs";


       $conn = new mysqli('localhost', 'id21897646_nbs', 'Nbs@1234', 'id21897646_nbs');

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }


        $stmt = $conn->prepare("INSERT INTO RestaurantUser (Name, Location ,GSTIN, Email, Contact) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssi", $Name,$Location,$GSTIN,$Email,$Contact);
        
        
        if ($stmt->execute()) {
            header("location: restrauntCreateLogin.html");
        } else {
            echo "Error: " . $stmt->error;
        }
        
        $stmt->close();
        $conn->close();
    } else {
        echo "All fields are required";
    }
} else {
    echo "Form not submitted";
}
?>
