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
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, width=device-width">
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

--font-inknut-antiqua: 'Inknut Antiqua';
--font-mercusuar-script: 'Mercusuar Script';
--font-algerian: Algerian;

--font-size-xl: 20px;
--font-size-base: 16px;
--font-size-5xl: 24px;

--color-white: #fff;
--color-pink: #fabfb1;
--color-darkslategray: #1b4965;
--color-steelblue: #3f90c1;

--br-31xl: 50px;

}

.tv-31-child {
position: absolute;
top: 77px;
left: 352px;
border-radius: var(--br-31xl);
width: 882px;
height: 605px;
}
.tv-31-item {
position: absolute;
top: 124px;
left: 362px;
border-radius: var(--br-31xl);
background-color: var(--color-darkslategray);
width: 863px;
height: 139px;
}
.date {
position: absolute;
top: 132px;
left: 788px;
display: inline-block;
width: 141px;
height: 28px;
}
.ngo-name {
position: absolute;
top: 137px;
left: 398px;
display: inline-block;
width: 179px;
height: 43px;
}
.tv-31-inner {
position: absolute;
top: 163px;
left: 1065px;
border-radius: var(--br-31xl);
background-color: var(--color-steelblue);
width: 128px;
height: 80px;
}
.location {
position: absolute;
top: 222px;
left: 398px;
display: inline-block;
width: 179px;
height: 44px;
}
.id {
position: absolute;
top: 225px;
left: 789px;
display: inline-block;
width: 43px;
height: 43px;
}
.apply {
position: absolute;
top: 26vh;
left: 1095px;
font-size: var(--font-size-5xl);
display: inline-block;
width: 83px;
height: 65px;
}
.rectangle-div {
position: absolute;
top: 303px;
left: 362px;
border-radius: var(--br-31xl);
background-color: var(--color-darkslategray);
width: 863px;
height: 139px;
}
.ngo-name1 {
position: absolute;
top: 313px;
left: 398px;
display: inline-block;
width: 115px;
height: 43px;
}
.tv-31-child1 {
position: absolute;
top: 340px;
left: 1065px;
border-radius: var(--br-31xl);
background-color: var(--color-steelblue);
width: 128px;
height: 80px;
}
.location1 {
position: absolute;
top: 398px;
left: 398px;
display: inline-block;
width: 135px;
height: 43px;
}
.id1 {
position: absolute;
top: 400px;
left: 789px;
display: inline-block;
width: 29px;
height: 43px;
}
.apply1 {
position: absolute;
top: 50vh;
left: 1095px;
font-size: var(--font-size-5xl);
display: inline-block;
width: 83px;
height: 66px;
}
.group-child {
position: absolute;
top: -17px;
left: 0px;
border-radius: var(--br-31xl);
background-color: var(--color-darkslategray);
width: 863px;
height: 139px;
}
.group-div {
position: absolute;
top: 496px;
left: 362px;
width: 863px;
font-family: var(--font-Inknut-Antiqua);
height: 139px;
}
.ngo-name2 {
position: absolute;
top: 493px;
left: 398px;
display: inline-block;
font-family: var(--font-Inknut-Antiqua);

width: 120px;
height: 43px;
}
.tv-31-child2 {
position: absolute;
top: 521px;
left: 1065px;
border-radius: var(--br-31xl);
background-color: var(--color-steelblue);
width: 128px;
height: 80px;
}
.location2 {
position: absolute;
top: 578px;
left: 398px;
display: inline-block;
font-family: var(--font-Inknut-Antiqua);
width: 110px;
height: 43px;
}
.id2 {
position: absolute;
top: 580px;
left: 789px;
display: inline-block;
width: 29px;
height: 44px;
font-family: var(--font-Inknut-Antiqua);

}
.apply2 {
position: absolute;
top: 74.5vh;
left: 1095px;
font-size: var(--font-size-5xl);
display: inline-block;
width: 93px;
height: 65px;
}
.upcoming-food-donation {
position: absolute;
top: 22px;
left: 538px;
font-size: var(--font-size-5xl);
font-weight: 600;
color: var(--color-darkslategray);
display: inline-block;
width: 605px;
height: 65px;
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




.date1 {
position: absolute;
top: 320px;
left: 788px;
display: inline-block;
width: 72px;
height: 28px;
}

.date2 {
position: absolute;
top: 493px;
left: 788px;
display: inline-block;
width: 72px;
height: 28px;
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
.applied-history {
position: absolute;
top: 236px;
left: 49px;
font-size: var(--font-size-xl);
display: inline-block;
width: 218px;
height: 50px;
cursor: pointer;
}
.applied-history a {
  color: #ffffff; 
  text-decoration: none; 
  transition: color 0.3s ease; 
}

.applied-history a:hover {
  color: #0000ff;
  
}
.home a {
  color: #ffffff; 
  text-decoration: none; 
  transition: color 0.3s ease; 
  font-family: var(--font-Inknut-Antiqua);

}

.home a:hover {
  color: #0000ff; 
}
.home {
position: absolute;
top: 195px;
left: 51px;
font-size: var(--font-size-xl);
display: inline-block;
width: 150px;
height: 50px;
cursor: pointer;
font-family: var(--font-Inknut-Antiqua);

}
.home a {
  color: #ffffff; /* Set the color of the link text */
  text-decoration: none; /* Remove underline from the link */
  transition: color 0.3s ease; /* Add transition for smooth color change on hover */
}

.home a:hover {
  color: #0000ff; /* Change color of link text on hover */
}

.logout a {
  color: #ffffff; 
  text-decoration: none; 
  transition: color 0.3s ease; 
}

.logout a:hover {
  color: #0000ff; 
}
.logout {
position: absolute;
top: 640px;
left: 51px;
font-size: var(--font-size-xl);
display: inline-block;
font-family: var(--font-Inknut-Antiqua);

width: 218px;
height: 50px;
cursor: pointer;
}
.tv-31 {
width: 100%;
position: relative;
background: linear-gradient(180deg, #ffeae5, #fabfb1);
height: 720px;
overflow: hidden;
text-align: left;
font-size: var(--font-size-base);
color: var(--color-white);
font-family: var(--font-Inknut-Antiqua);
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
    top:125px;
    left: 93.7vw;
    width: 6vw;
    height: 13vh;
    object-fit: fill;
    font-family: var(--font-merusuar-script);
    font-size: 27px;
    color: #1b4965;
}

      </style>
    </head>
    <body>
    
    <div class="tv-31">
      <img class="tv-31-child" alt="" src="images/rectangle-38.svg">
     <div class="tv-31-item">
     </div>
     <?php 
     $row=$result->fetch_assoc()
     ?>
     <div class="date">Date: <?php echo $row['Date']; ?></div>
     <div class="ngo-name">Drive Name: <?php echo $row['DriveName']; ?></div>
     <div class="location">Location: <?php echo $row['Location']; ?></div>
     <div class="id">ID: <?php echo $row['ID']; ?></div>
     
     
      <div class="tv-31-inner">
      </div>
      <div class="apply"><a href="volpopup.php">Apply</a></div>
      <div class="rectangle-div">
      </div>
      
      <div class="ngo-name1"> Drive Name</div>
      
      <div class="tv-31-child1">
      </div>
      
      <div class="location1">LOCATION</div>
      
      <div class="id1">ID</div>
      
      <div class="apply1"><a href="volpopup.php">Apply</a></div>
      <div class="group-div">
        <div class="group-child">
        </div>
      </div>
      <div class="ngo-name2"> Drive Name</div>
      <div class="tv-31-child2">
      </div>
       <div class="tv-23-child1"></div>
      <img
        class="whatsapp-image-2023-10-21-at-8-icon"
        alt=""
        src="images/WhatsAppImage.png"
      />
      
      <div class="location2">LOCATION</div>
      <div class="id2">ID</div>
      <div class="apply2"><a href="volpopup.html">Apply</a></div>
      <div class="upcoming-food-donation">UPCOMING FOOD DONATION DRIVES</div>
      <img class="rectangle-icon" alt="" src="images/rectangle-35.svg">
      <div class="nbs-text">NBS</div>
      <div class="date1">Date</div>
      <div class="date2">Date</div>
      <div class="nbs">NBS</div>
      <div class="nishulkh-bhojan-seva">Nishulkh Bhojan Seva</div>
      <div class="applied-history" id="appliedHistoryText"><a href="volappliedhist.php">Applied History</a></div>
      <div class="home" id="homeText"><a href="index.html"><a href="volupcomingdrives.php">Home</a></div>
      <div class="logout" ><a href="NGOLogout.html">Logout</div>
    </div>
    
    
    
    
    <script>
          var appliedHistoryText = document.getElementById("appliedHistoryText");
          if(appliedHistoryText) {
            appliedHistoryText.addEventListener("click", function (e) {
              
            });
          }

          var homeText = document.getElementById("homeText");
          if(homeText) {
            homeText.addEventListener("click", function (e) {
         
            });
          }

          var logoutText = document.getElementById("logoutText");
          if(logoutText) {
            logoutText.addEventListener("click", function (e) {
       
            });
          }</script></body>
  </html>