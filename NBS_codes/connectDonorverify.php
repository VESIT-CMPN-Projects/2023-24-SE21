<?php
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$Verify = $_POST['Verify'];

if ($Password == $Verify) {
    $conn = mysqli_connect('localhost', 'id21897646_nbs', 'Nbs@1234', 'id21897646_nbs');
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "INSERT INTO DonorLogin (Email, Password) VALUES ('$Email', '$Password') 
            ON DUPLICATE KEY UPDATE Password='$Password'";
    if (mysqli_query($conn, $sql)) {
        header("Location: DonorLogin.html");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
} else {
    header("Location: error.html");
    exit();
}
?>
