<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "id21897646_nbs";
$password = "Nbs@1234";
$dbname = "id21897646_nbs";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$Email = $_POST['Email'];
$Password = $_POST['Password'];

$stmt = $conn->prepare("SELECT Email, Password FROM DonorLogin WHERE Email=?");
$stmt->bind_param("s", $Email);

$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    
    if (isset($_POST['Password']) && $_POST['Password'] == $row['Password']) {
        header("Location: restneworder.php");
        exit();
    } else {
        header("Location: error.html");
    }
} else {
    echo "UniqueID not found";
}

$stmt->close();
$conn->close();
?>
