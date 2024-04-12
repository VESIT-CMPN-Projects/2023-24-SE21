<?php
// Retrieve data sent by AJAX request
$data = json_decode(file_get_contents('php://input'), true);

$conn = new mysqli('localhost', 'id21897646_nbs', 'Nbs@1234', 'id21897646_nbs');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO orders (Type, name, Quantity, Expiry, fromRes,UniqueID,GSTIN) VALUES (?, ?, ?, ?, ?,?,?)");
$stmt->bind_param("sssssss", $data['foodType'], $data['foodName'], $data['quantity'], $data['expiry'], $data['from'],$data['UniqueID'],$data['GSTIN']);
$stmt->execute();

$stmt->close();
$conn->close();

http_response_code(200);
?>
