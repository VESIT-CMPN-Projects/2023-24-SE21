<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection
$servername = "localhost"; // Change this to your database host
$username = "id21897646_nbs"; // Change this to your database username
$password = "Nbs@1234"; // Change this to your database password
$dbname = "id21897646_nbs"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the SQL statement to fetch drive details from DriveCreation table
$sql = "SELECT ID, Name AS DriveName, Location, Date FROM DriveCreation";
$result = $conn->query($sql);
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./index.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inknut Antiqua:wght@400;600&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Mercusuar Script:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Algerian:wght@400&display=swap"
    />
     <link
      rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Abril Fatface:wght@400&display=swap"
    />
    <style>
body {
  margin: 0;
  line-height: normal;
}

:root {
  /* fonts */
  --font-inknut-antiqua: "Inknut Antiqua";
  --font-algerian: Algerian;
  --font-mercusuar-script: "Mercusuar Script";

  /* font sizes */
  --font-size-xl: 20px;
  --font-size-base: 16px;

  /* Colors */
  --color-white: #fff;
  --color-pink: #fabfb1;

  /* Border radiuses */
  --br-31xl: 50px;
}

.tv-29-child,
.tv-29-item {
  position: absolute;
  top: 205px;
  left: 397px;
  border-radius: var(--br-31xl);
  width: 850px;
  height: 410px;
}
.tv-29-item {
  top: 223px;
  left: 421px;
  width: 808px;
  height: 370px;
}
.date,
.id,
.location,
.ngo-name {
  position: absolute;
  top: 258px;
  left: 454px;
  display: inline-block;
  width: 124px;
  height: 121px;
}
.date,
.id,
.location {
  top: 471px;
  width: 105px;
  height: 120px;
}
.date,
.id {
  top: 476px;
  left: 956px;
  width: 55px;
  height: 124px;
}
.date {
  top: 258px;
  left: 945px;
  width: 168px;
  height: 81px;
}
.tv-29-inner {
  position: absolute;
  top: 0;
  left: -53px;
  border-radius: var(--br-31xl);
  width: 353px;
  height: 720px;
}
.nbs,
.nishulkh-bhojan-seva {
  position: absolute;
  left: 15px;
  color: var(--color-pink);
  display: inline-block;
}
a{
    color:#fff;
    text-decoration: none;
}
.nishulkh-bhojan-seva {
  top: 76.25px;
  font-size: 25px;
  line-height: 30px;
  font-family: var(--font-mercusuar-script);
  width: 360px;
  height: 37.5px;
  text-shadow: 0.8px 0 0 rgba(27, 73, 101, 0.8),
    0 0.8px 0 rgba(27, 73, 101, 0.8), -0.8px 0 0 rgba(27, 73, 101, 0.8),
    0-0.8px 0 rgba(27, 73, 101, 0.8);
}
.nbs {
  top: 10px;
  font-size: 50px;
  font-family: var(--font-Abril Fatface);
  width: 230px;
  height: 50px;
  text-shadow: 1px 0 0#1b4965, 0 1px 0#1b4965, -1px 0 0#1b4965, 0-1px 0#1b4965;
}
.congratulations {
  margin: 0;
  white-space: pre-wrap;
}
.you-have-succesfully {
  margin: 0;
}
.whatsapp-image-2023-10-21-at-8-icon {
    position: absolute;
    top: 18px;
    left: 92.5vw;
    width: 6vw;
    height: 13vh;
    object-fit:fill;
}

.nbs-text {
    position: absolute;
    top:125px;
    left: 93.7vw;
    width: 6vw;
    height: 13vh;
    object-fit: fill;
    font-family: var(--font-merusuar-script);
    font-size: 27px;
    color: #1b4965;
}


.congratulations-you-container {
  position: absolute;
  top: 44px;
  left: 434px;
  font-size: 24px;
  font-weight: 600;
  color: #1b4965;
  display: inline-block;
  width: 776px;
  height: 150px;
}

.applied-history,
.home1,
.logout {
  position: absolute;
  top: 195px;
  left: 61px;
  font-size: var(--font-size-xl);
  display: inline-block;
  width: 218px;
  height: 50px;
}
.applied-history,
.logout {
  top: 248px;
  left: 59px;
  cursor: pointer;
}
.logout {
  top: 640px;
  left: 61px;
}
.tv-29 {
  width: 100%;
  position: relative;
  background: linear-gradient(180deg, #ffeae5, #fabfb1);
  height: 720px;
  overflow: hidden;
  text-align: left;
  font-size: var(--font-size-base);
  color: var(--color-white);
  font-family: var(--font-inknut-antiqua);
}
.home1 a {
  color: #ffffff;
  text-decoration: none; 
  transition: color 0.3s ease; 
}

.home1 a:hover {
  color: #0000ff;
}

      </style>
  </head>
  <body>
    <div class="tv-29">
      <img class="tv-29-child" alt="" src="images/rectangle-33.svg" />

      <img class="tv-29-item" alt="" src="images/rectangle-36.svg" />
      <?php
    // Check if the query was successful and rows were returned
    if ($result && $result->num_rows > 0) {
        // Fetch rows one by one
        while($row = $result->fetch_assoc()) {
            // Now, echo the retrieved values into the HTML fields
    ?>
      <div class="ngo-name">NGO NAME: <?php echo $row['DriveName']; ?></div>
      <div class="location">LOCATION: <?php echo $row['Location']; ?></div>
      <div class="id">ID: <?php echo $row['ID']; ?></div>
      <div class="date">Date: <?php echo $row['Date']; ?></div>
      <img class="tv-29-inner" alt="" src="images/rectangle-35.svg" />
      <?php 
        }
     }
    ?>
    
      <div class="nishulkh-bhojan-seva">Nishulkh Bhojan Seva</div>
      <div class="nbs">NBS</div>
      <div class="congratulations-you-container">
        <p class="congratulations">Congratulations !!!</p>
        <p class="you-have-succesfully">
          You have succesfully applied for a food Donation Drive
        </p>
      </div>
      <div class="home1"><a href="volupcomingdrives.php">Home</a></div>
      <div class="applied-history" ><a href=" volappliedhist.php">Applied History</div>
      <div class="logout" ><a href="NGOLogout.html">Logout</div>
    </div>
    <div class="nbs-text">NBS</div>

     <div class="tv-23-child1"></div>
      <img
        class="whatsapp-image-2023-10-21-at-8-icon"
        alt=""
        src="images/WhatsAppImage.png"
      />

    <script>
      var appliedHistoryText = document.getElementById("appliedHistoryText");
      if (appliedHistoryText) {
        appliedHistoryText.addEventListener("click", function (e) {
        
        });
      }
      
      var logoutText = document.getElementById("logoutText");
      if (logoutText) {
        logoutText.addEventListener("click", function (e) {
          
        });
      }
      </script>
  </body>
</html>
