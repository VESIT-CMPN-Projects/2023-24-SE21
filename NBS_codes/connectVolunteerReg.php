<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['Name'],$_POST['Email'],$_POST['Aadhar'], $_POST['Contact'], $_POST['Address'])) {
        $Name = $_POST['Name'];
        $Email = $_POST['Email'];
        $Aadhar = $_POST['Aadhar'];
        $Contact =  $_POST['Contact'];
        $Address =  $_POST['Address'];

        $conn = new mysqli('localhost', 'id21897646_nbs', 'Nbs@1234', 'id21897646_nbs');
        if ($conn->connect_error) {
            die('Connection failed: ' . $conn->connect_error);
        }

        $stmt = $conn->prepare("INSERT INTO VolunteerRegistration (Name, Email ,Aadhar, Contact, Address) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssiis", $Name,$Email,$Aadhar,$Contact,$Address);
        
        if ($stmt->execute()) {
            header("Location: volunteerCreateLogin.html" );   
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
