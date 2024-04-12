<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


$servername = "localhost"; // Change this to your database host
$username = "id21897646_nbs"; // Change this to your database username
$password = "Nbs@1234"; // Change this to your database password
$dbname = "id21897646_nbs"; // Change this to your database name


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

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
      href="https://fonts.googleapis.com/css2?family=Abril Fatface:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Mercusuar Script:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Algerian:wght@400&display=swap"
    />
  </head>
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
  --color-darkslategray: #1b4965;
  --color-white: #fff;
  --color-pink: #fabfb1;

  /* Border radiuses */
  --br-31xl: 50px;
}


  .tv-33-child,
.tv-33-item {
  position: absolute;
  top: 85px;
  left: 360px;
  border-radius: var(--br-31xl);
  width: 880px;
  height: 589px;
}
.tv-33-item {
  top: 116px;
  left: 369px;
  background-color: var(--color-darkslategray);
  width: 861px;
  height: 135px;
}
.id,
.location,
.ngo-name {
  position: absolute;
  top: 117px;
  left: 399px;
  display: inline-block;
  width: 202px;
  height: 42px;
  display: inline-block;
  margin-right: 200px;
}
.id,
.location {
  top: 200px;
  left: 406px;
  width: 171px;
  display: inline-block;
  margin-right: 200px;
}
.id {
  top: 202px;
  left: 795px;
  width: 55px;
  height: 43px;
  display: inline-block;
  margin-right: 200px;
    
}
.tv-33-inner {
  position: absolute;
  top: 300px;
  left: 369px;
  border-radius: var(--br-31xl);
  background-color: var(--color-darkslategray);
  width: 861px;
  height: 136px;
}
.id1,
.location1,
.ngo-name1 {
  position: absolute;
  top: 302px;
  left: 400px;
  display: inline-block;
  width: 121px;
  height: 41px;
}
.id1,
.location1 {
  top: 384px;
  left: 406px;
  width: 105px;
  height: 42px;
    display: inline-block;
  margin-right: 200px;
}
.id1 {
  top: 386px;
  left: 795px;
  width: 55px;
    display: inline-block;
  margin-right: 200px;
}
.rectangle-div {
  position: absolute;
  top: 490px;
  left: 369px;
  border-radius: var(--br-31xl);
  background-color: var(--color-darkslategray);
  width: 861px;
  height: 136px;
}
.ngo-name2 {
  position: absolute;
  top: 491px;
  left: 396px;
  display: inline-block;
  width: 121px;
  height: 42px;
}
.date,
.date1,
.date2,
.home,
.id2,
.location2 {
  position: absolute;
  top: 575px;
  left: 402px;
  display: inline-block;
  width: 105px;
  height: 41px;
}
.date,
.date1,
.date2,
.home,
.id2 {
  top: 576px;
  left: 795px;
  width: 61px;
  height: 43px;
    display: inline-block;
  margin-right: 200px;
}
.date,
.date1,
.date2,
.home {
  top: 309px;
  left: 1028px;
  width: 62px;
    display: inline-block;
  margin-right: 200px;
}
.date1,
.date2,
.home {
  top: 123px;
  width: 158px;
  height: 28px;
  display: inline-block;
  margin-right: 200px;  
}
.date2,
.home {
  top: 499px;
  width: 52px;
  height: 26px;
   display: inline-block;
  margin-right: 200px;
}
.home {
  top: 145px;
  left: 62px;
  font-size: var(--font-size-xl);
  width: 150px;
  height: 50px;
  cursor: pointer;
}

.rectangle-icon {
  position: absolute;
  top: 0px;
  left: -53px;
  border-radius: var(--br-31xl);
  width: 353px;
  height: 720px;
  opacity: 1;
}

.rectangle-icon img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  opacity: 1; /* Adjust the opacity value as needed */
}

.home1 a {
  color: #ffffff; 
  text-decoration: none; 
  transition: color 0.3s ease; 
}

.home a:hover {
  color: #0000ff; 
}

.nbs,
.nishulkh-bhojan-seva {
  position: absolute;
  left: 16px;
  color: var(--color-pink);
  display: inline-block;
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
.whatsapp-image-2023-10-21-at-8-icon {
    position: absolute;
    top: 18px;
    left: 92.5vw;
    width: 6vw;
    height: 13vh;
    object-fit: fill;
}

.nbs-text {
    position: absolute;
    top:109px;
    left: 93.9vw;
    width: 6vw;
    height: 13vh;
    object-fit: fill;
    font-family: var(--font-merusuar-script);
    font-size: 23px;
    color: #1b4965;
}
.nbs {
  top: 10px;
  font-size: 50px;
  font-family: "Abril Fatface";
  width: 230px;
  height: 50px;
  text-shadow: 1px 0 0#1b4965, 0 1px 0#1b4965, -1px 0 0#1b4965, 0-1px 0#1b4965;
}
.home1,
.logout {
  left: 62px;
  font-size: var(--font-size-xl);
  width: 218px;
  height: 50px;
}
.home1 {
  position: absolute;
  top: 195px;
  display: inline-block;
}
.logout {
  top: 640px;
  cursor: pointer;
}
.applied-history,
.applied-history1,
.logout {
  position: absolute;
  display: inline-block;
}
.applied-history {
  top: 248px;
  left: 60px;
  font-size: var(--font-size-xl);
  width: 218px;
  height: 50px;
  cursor: pointer;
}
a{
    color:#fff;
    text-decoration: none;
}
.applied-history a {
  top: 248px;
  left: 60px;
  font-size: var(--font-size-xl);
  width: 218px;
  height: 50px;
  cursor: pointer;
}
.tv-33 {
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

  
  
  
  
  
  </style>
  <body>
    <div class="tv-33">
      <img class="tv-33-child" alt="" src="images/rectangle-38.svg" />

      <div class="tv-33-item"></div>
      <?php
    // Check if the query was successful and rows were returned
    if ($result && $result->num_rows > 0) {
        // Fetch rows one by one
        while($row = $result->fetch_assoc()) {
            // Now, echo the retrieved values into the HTML fields
    ?>
       <div class="ngo-name">Drive Name: <?php echo $row['DriveName']; ?></div>
      <div class="location">LOCATION: <?php echo $row['Location']; ?></div>
      <div class="id">ID: <?php echo $row['ID']; ?></div>
      <div class="tv-33-inner"></div>
      <div class="ngo-name1">Drive NAME </div>
      <div class="location1">LOCATION </div>
      <div class="id1">ID: </div>
      <div class="rectangle-div"></div>
      <div class="ngo-name2">Drive NAME </div>
      <div class="location2">LOCATION: </div>
      <div class="id2">ID: </div>
      <div class="date">Date: </div>
      <div class="date1">Date :<?php echo $row['Date']; ?> </div>
      <div class="date2">Date : </div>
      <?php
        }
    }
    ?>
      <div class="nbs-text">NBS</div>
      <img class="rectangle-icon" alt="" src="images/rectangle-35.svg" />

      <div class="nishulkh-bhojan-seva">Nishulkh Bhojan Seva</div>
      <div class="nbs">NBS</div>
       <img
        class="whatsapp-image-2023-10-21-at-8-icon"
        alt=""
        src="images/WhatsAppImage.png"
      />
      <div class="home1"><a href="volupcomingdrives.php">Home</a></div>
      <div class="applied-history" ><a href=" volappliedhist.php">Applied History</div>
      <div class="logout" ><a href="NGOLogout.html">Logout</div>
    </div>
    

    <script>
      var homeText = document.getElementById("homeText");
      if (homeText) {
        homeText.addEventListener("click", function (e) {
          
        });
      }
      
      var logoutText = document.getElementById("logoutText");
      if (logoutText) {
        logoutText.addEventListener("click", function (e) {
          
        });
      }
      
      var appliedHistoryText = document.getElementById("appliedHistoryText");
      if (appliedHistoryText) {
        appliedHistoryText.addEventListener("click", function (e) {
         
        });
      }
      </script>
  </body>
</html>
