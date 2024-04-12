<?php
session_start();

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

$GSTIN = $_POST['GSTIN'];
$Password = $_POST['Password'];

$stmt = $conn->prepare("SELECT GSTIN, Password FROM RestaurantLogin WHERE GSTIN=?");
$stmt->bind_param("s", $GSTIN);

$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    
    if (isset($_POST['Password']) && $_POST['Password'] == $row['Password']) {
        $_SESSION['gstin'] = $GSTIN;
        header("Location: restneworder.php");
        exit();
    } else {
        header("Location: error.html");
    }
} else {
    header("Location: error.html");
}

$stmt->close();
$conn->close();
?>

