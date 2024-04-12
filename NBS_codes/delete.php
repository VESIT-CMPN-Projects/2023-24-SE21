<?php

$host = 'localhost';
$dbname = 'id21897646_nbs';
$username = 'id21897646_nbs';
$password = 'Nbs@1234';

try {
    // Connect to the database
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    // Set PDO to throw exceptions on error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // SQL statement to delete expired entries
    $sql = "DELETE FROM FoodEntryRes WHERE expiry <= CURRENT_DATE";
    
    // Execute the SQL statement
    $pdo->exec($sql);
    
    echo "Expired entries deleted successfully.";
} catch(PDOException $e) {
    // Handle database connection or query errors
    echo "Error: " . $e->getMessage();
}
?>
