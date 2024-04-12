<?php
session_start();

if (isset($_SESSION['UniqueID'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['Name']) && isset($_POST['Location']) && isset($_POST['Date']) && isset($_POST['Time']) && isset($_POST['NoVol']) && isset($_POST['SpecialReq'])) {
            
            $uniqueID = $_SESSION['UniqueID'];
            $name = $_POST['Name'];
            $location = $_POST['Location'];
            $date = $_POST['Date'];
            $time = $_POST['Time'];
            $num_volunteers = $_POST['NoVol'];
            $special_requirement = $_POST['SpecialReq'];

            $conn = new mysqli('localhost', 'id21897646_nbs', 'Nbs@1234', 'id21897646_nbs');

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "INSERT INTO DriveCreation (Name, Location, Time, NoVol, SpecialReq, UniqueID, Date) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sssiiss", $name, $location, $time, $num_volunteers, $special_requirement, $uniqueID, $date);

            if ($stmt->execute()) {
                 header("Location: ngodrivecreation.html");
            } 
            else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $stmt->close();
            $conn->close();
        } else {
            echo "All fields are required.";
        }
    } else {
       echo "Error";
        
    }
} else {
    
}
?>
