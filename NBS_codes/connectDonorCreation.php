<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['Name'],$_POST['Location'],$_POST['Date'], $_POST['Time'], $_POST['NumberOfVolunteers'],$_POST['specialcharacters'])) {
        $Name = $_POST['Name'];
        $Location = $_POST['Location'];
        $Date = $_POST['Date'];
        $Time =  $_POST['Time'];
        $NoVol =  $_POST['NumberOfVolunteers'];
        $SpecialReq =  $_POST['specialcharacters'];
        
        $conn = new mysqli('localhost', 'id21897646_nbs', 'Nbs@1234', 'id21897646_nbs');
        if ($conn->connect_error) {
            die('Connection failed: ' . $conn->connect_error);
        }

        $stmt = $conn->prepare("INSERT INTO DonorReg (Name, Email ,Aadhar, Contact, Address) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssiis", $Name,$Email,$Aadhar,$Contact,$Address);
        
        if ($stmt->execute()) {
            header("Location: donorcreatelogin.html" );   
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
