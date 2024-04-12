<?php
session_start();

$conn = new mysqli('localhost', 'id21897646_nbs', 'Nbs@1234', 'id21897646_nbs');

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM DriveCreation";
$result = $conn->query($sql);

if (!$result) {
  die("Query failed: " . $conn->error);
}

// Fetch the first row from the result set
$row = $result->fetch_assoc();

// Assigning values to variables
$Name = $row["Name"];
$Location = $row["Location"];
$Time = $row["Time"];
$NoVol = $row["NoVol"];
$SpecialReq = $row["SpecialReq"];
$ID = $row["ID"];
$UniqueID = $row["UniqueID"];
$Date = $row["Date"];
?>
?>

<!DOCTYPE html>
<html>
  <head>
    <style>
      body {
  margin: 0;
  line-height: normal;
}

:root {
  
  --font-inknut-antiqua: "Inknut Antiqua";
  --font-jockey-one: "Jockey One";

  
  --font-size-xl: 20px;
  --font-size-base: 16px;

 
  --color-white: #fff;
  --color-darkslategray: #1b4965;

  
  --br-31xl: 50px;
}
.tv-35-child
{
  position: fixed;
  max-height: 100vh;
  background-color: var(--color-darkslategray);
}
.tv-35-item
{
  position:relative;
  background-color: var(--color-darkslategray);
}
.whatsapp-image {
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
.tv-35-child {
  top: 0;
  left: -47px;
  border-radius: 40px;
  border: 1px solid #000;
  box-sizing: border-box;
  width: 316px;
  height: 723px;
}
.tv-35-item {
  top: 506px;
  left: 310px;
  border-radius: var(--br-31xl);
  width: 790px;
  height: 154px;
}
.current-drives {
  position: absolute;
  top: 65px;
  left: 339px;
  font-size: 24px;
  font-weight: 600;
  color: var(--color-darkslategray);
  display: inline-block;
  width: 471px;
  height: 65px;
}
.rectangle-div,
.tv-35-inner {
  position: absolute;
  top: 135px;
  left: 310px;
  border-radius: var(--br-31xl);
  background-color: var(--color-darkslategray);
  width: 790px;
  height: 154px;
}
.rectangle-div {
  top: 321px;
}
.date,
.location,
.name,
.name1,
.name2,
.volunteers {
  position: absolute;
  top: 152px;
  left: 340px;
  display: inline-block;
  width: 198px;
  height: 48px;
}
.date,
.location,
.name1,
.name2,
.volunteers {
  top: 516px;
  left: 340px;
}
.date,
.location,
.name2,
.volunteers {
  top: 595px;
  left: 340px;
  width: 157px;
}
.date,
.name2,
.volunteers {
  top: 596px;
  left: 820px;
  width: 113px;
}
.date,
.name2 {
  top: 518px;
  left: 820px;
  width: 55px;
  height: 31px;
}
.name2 {
  top: 339px;
  left: 350px;
  width: 132px;
  height: 48px;
}
.date1,
.date2,
.location1,
.location2,
.volunteers1,
.volunteers2 {
  position: absolute;
  top: 231px;
  left: 340px;
  display: inline-block;
  width: 162px;
  height: 48px;
}
.date1,
.date2,
.location2,
.volunteers1,
.volunteers2 {
  top: 420px;
  left: 340px;
}
.date1,
.date2,
.volunteers1,
.volunteers2 {
  top: 232px;
  left: 820px;
  width: 152px;
}
.date1,
.date2,
.volunteers2 {
  top: 406px;
  left: 820px;
  width: 112px;
}
.date1,
.date2 {
  top: 154px;
  width: 178px;
  height: 31px;
}
.date2 {
  top: 332px;
  left: 820px;
}
.ellipse-div {
  position: absolute;
  top: 620px;
  left: 1166px;
  border-radius: 50%;
  background-color: var(--color-darkslategray);
  width: 80px;
  height: 76px;
}
.div {
  position: fixed;
  top: 590px;
  left: 1194px;
  font-size: 50px;
  display: inline-block;
  width: 30px;
  height: 30px;
}
.welcome-back-ngo {
  position: fixed;
  top: 590px;
  left: 1194px;
  font-size: 50px;
  display: inline-block;
  width: 30px;
  height: 30px;
}
.welcome-back-ngo {
  top: 38px;
  left: 46px;
  font-size: 30px;
  font-family: var(--font-jockey-one);
  width: 197px;
  height: 83px;
  cursor: pointer;
}
.applications,
.drives,
.home1,
.logout,
.recent-orders {
  position: fixed;
  top: 211px;
  left: 48px;
  font-size: var(--font-size-xl);
  display: inline-block;
  width: 218px;
  height: 50px;
}
.applications,
.drives,
.home1,
.logout {
  top: 656px;
  cursor: pointer;
}
.applications,
.drives,
.home1 {
  top: 265px;
}
.applications,
.home1 {
  top: 326px;
  left: 46px;
}
.home1 {
  top: 161px;
  left: 48px;
  width: 150px;
}
.tv-35 {
  width: 100vw;
  position: relative;
  background: linear-gradient(180deg, #ffeae5, #fabfb1);
  height:200vh;
  overflow: auto;
  text-align: left;
  font-size: var(--font-size-base);
  color: var(--color-white);
  font-family: var(--font-inknut-antiqua);
}
.recent-orders a {
  color: #fff; 
  text-decoration: none; 
  transition: color 0.3s ease; 
}

.recent-orders a:hover {
  color: #0000ff; 
}

.home1 a {
  color: #fff; 
  text-decoration: none; 
  transition: color 0.3s ease; 
}

.home1 a:hover {
  color: #0000ff; 
}

.drives a {
  color: #ffffff; 
  text-decoration: none;
  transition: color 0.3s ease; 
}

.drives a:hover {
  color: #0000ff; 
}

.applications a {
  color: #ffffff; 
  text-decoration: none; 
  transition: color 0.3s ease; 
}

.applications a:hover {
  color: #0000ff; 
}

.logout a {
  color: #ffffff; 
  text-decoration: none; 
  transition: color 0.3s ease; 
}

.logout a:hover {
  color: #0000ff; 
}

.plus-button {
  position: fixed;
  width: 4vh;
  height: 4vh;
  left: 85vw;
  color: #fff; 
  top:85vh;
  background-color:#1b4965;
  border-radius: 50%;
  text-align: center;
  font-size: 2em;
  text-decoration: none; 
}
.plus-button a{
    color: #fff;
}
.plus-button a:hover{
    color:#ffeae5;
}


    </style>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inknut Antiqua:wght@400;600&display=swap"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Jockey One:wght@400&display=swap"
    />
  </head>
  <body>
    <div class="tv-35">
      <div class="tv-35-child"></div>
      <div class="tv-35-item"></div>
        <div class="plus-button"><a href="ngodrivecreation.html"><i class="fa fa-plus"></i></a></div>
      <div class="current-drives">Current Drives</div>
      <div class="tv-35-inner"></div>
      <div class="rectangle-div"></div>
      <div class="name">NAME: <?php echo $Name; ?> </div>
      <div class="name1">NAME</div>
      <div class="location1">LOCATION: <?php echo $Location; ?></div>
      <div class="volunteers1">Volunteers: <?php echo $NoVol; ?></div>
      <div class="date1">Date: <?php echo $Date; ?></div>
      <div class="name2">NAME</div>
      <div class="location">LOCATION</div>
      <div class="location2">LOCATION</div>
      <div class="volunteers">Volunteers:</div>
      <div class="volunteers2">Volunteers:</div>
      <div class="date">Date</div>
      <div class="date2">Date</div>
      <div class="welcome-back-ngo" id="welcomeBackNGO">Welcome Back! </div>
      <div class="recent-orders"> 
      <a href="ngorecentorders.php">Recent Orders</a>
      </div>
      <div class="logout" id="logoutText">
          <a href="NGOLogout.html">Logout</a></div>
      <div class="drives" id="drivesText">
          <a href="ngocurrentdrives.php">Drives</a></div>
      <div class="applications" id="applicationsText">
          <a href="ngova.html">Applications</a></div>
      <div class="home1" id="homeText">
          <a href="ngohome.php">Home</a></div>
          </div>
    <img
        class="whatsapp-image"
        alt=""
        src="images/WhatsAppImage.png"
      />
      <div class="nbs-text">NBS</div>
    </div>
  </body>
</html>