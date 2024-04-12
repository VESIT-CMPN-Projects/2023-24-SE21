<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    if(isset($_POST['Name'], $_POST['Location'], $_POST['UniqueID'], $_POST['Email'])) {
        $Name = $_POST['Name'];
        $Location = $_POST['Location'];
        $UniqueID = $_POST['UniqueID'];
        $Email = $_POST['Email'];

        

        
        $conn = new mysqli('localhost', 'id21897646_nbs', 'Nbs@1234', 'id21897646_nbs');
        
        if ($conn->connect_error) {
            die('Connection failed: ' . $conn->connect_error);
        }

        $stmt = $conn->prepare("INSERT INTO NGOuser (Name, Location, UniqueID, Email) VALUES (?, ?, ?, ?)");
        
        $stmt->bind_param("ssss", $Name, $Location, $UniqueID, $Email);
        
        
        if ($stmt->execute()) {

            $stmt_verify = $conn->prepare("SELECT Name, UniqueID FROM NGOVerify WHERE Name=? AND UniqueID=?");

            $stmt_verify->bind_param("ss", $Name, $UniqueID);

            $stmt_verify->execute();

            $result_verify = $stmt_verify->get_result();

            if ($result_verify->num_rows == 1) {

                header("Location: NGOCreateLogin.html");
                exit();
            } else {

                echo "Name and UniqueID not verified";
            }
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
