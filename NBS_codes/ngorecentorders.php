<?php
session_start();

$conn = new mysqli('localhost', 'id21897646_nbs', 'Nbs@1234', 'id21897646_nbs');

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

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

 
  --color-white: #fff;
  --color-darkslategray-100: #1b4965;
  --color-black: #000;

 
  --br-21xl: 40px;
}
body::-webkit-scrollbar {
  width: 0.8vw;
  height: 0.8vw;
}
body::-webkit-scrollbar-thumb
{
  background-color: #1b4965;
  border-radius: 10px;
}
.applications,
.drives,
.home,
.logout,
.recent-orders {
  position: absolute;
  top: 210px;
  left: 49px;
  font-size: var(--font-size-xl);
  display: inline-block;
  width: 218px;
  height: 50px;
  font-family: var(--font-inknut-antiqua);
  text-decoration: none;
}
.applications a {
  color: #ffffff; 
  text-decoration: none; 
  transition: color 0.3s ease; 
}
a{
    color: #fff;
      text-decoration: none; 

}
a:hover{
    color: blue;
      text-decoration: none; 

}


.recently-ordered a {
  color: #ffffff; 
  text-decoration: none; 
  transition: color 0.3s ease; 
}
.recently-ordered {
  position: absolute;
  top: 40px;
  left: 320px;
  font-size: 25px;
  font-family:"Ropa Sans";
  color: var(--color-black);
  display: inline-block;
  width: 218px;
  height: 50px;
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
.tv-25-child,
.tv-25-item {
  position: absolute;
  top: 100px;
  border-radius: var(--br-21xl);
  border: 1px solid var(--color-black);
  box-sizing: border-box;
  width: 310px;
  height: 574px;
}
.tv-25-child {
  left: 320px;
  background-color: var(--color-darkslategray-100);
}
.tv-25-item {
  left: 650px;
  background-color: var(--color-darkslategray-100);
}
.blank-line {
  margin: 0;
  padding-bottom: 8vh;
    
}
.type-quantity-expires-container {
  position: absolute;
  top: 21vh;
  left: 338px;
  display: inline-block;
  width: 194px;
  height: 50px;
  cursor: pointer;
}
.tv-25-inner {
  position: fixed;
  top: 0;
  left: -46px;
  border-radius: var(--br-21xl);
  background-color: var(--color-darkslategray-100);
  border: 1px solid var(--color-black);
  box-sizing: border-box;
  width: 326px;
  height: 720px;
}
.welcome-back-ngo {
  position: fixed;
  top: 35px;
  left: 40px;
  font-size: 20px;
  font-family: var(--font-inknut-antiqua);
  display: inline-block;
  color: #fff;
  width: 197px;
  height: 70px;
  cursor: pointer;
}
.applications,
.drives,
.home,
.logout,
.recent-orders {
  position: fixed;
  top: 195px;
  left: 42px;
  font-family: var(--font-inknut-antiqua);
  display: inline-block;
  width: 218px;
  height: 50px;
  text-decoration: none;
}
.applications,
.drives,
.home,
.logout {
  top: 640px;
  cursor: pointer;
    font-family: var(--font-inknut-antiqua);

}
.applications,
.drives,
.home {
  top: 249px;
}
.applications,
.home {
  top: 310px;
  left: 40px;
}
.home {
  top: 145px;
  left: 42px;
  width: 150px;
}
.rectangle-div {
  position: absolute;
  top: 146px;
  left: 375px;
  border-radius: var(--br-21xl);
  background-color: #d9d9d9;
  width: 199px;
  height: 154px;
}
.tv-25 {
  width: 100vw;
  position: relative;
  background: linear-gradient(180deg, #ffeae5, #fabfb1);
  height: 1440px;
  overflow: auto;
  text-align: left;
  font-size: var(--font-size-xl);
  color: var(--color-white);
  font-family: var(--font-inknut-antiqua);
}
a{
    color: #fff;
}
a:hover{
    color: blue;
}


    </style>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Jockey One:wght@400&display=swap"
    />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Ropa Sans:wght@400&display=swap">
   
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inknut Antiqua:wght@400&display=swap"
    />
  </head>
  <body>
    <div class="tv-25">
      <div class="recently-ordered">Recently Ordered</div>
      <div class="tv-25-child"></div>
      <div class="tv-25-item"></div>
      <div class="type-quantity-expires-container" id="typeQuantityExpires">
       <?php
    // Fetch data from the orders table
    $sql = "SELECT Type, Quantity, Expiry, fromRes FROM orders";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            // Display the values vertically

            echo "<p class='blank-line'>Type: " . $row["Type"] . "</p>";
            echo "<p class='blank-line'>Quantity: " . $row["Quantity"] . "</p>";
            echo "<p class='blank-line'>Expires on: " . $row["Expiry"] . "</p>";
            echo "<p class='blank-line'>From: " . $row["fromRes"] . "</p>";
            echo "</div>";
        }
    } else {
        echo "0 results";
    }
    ?>
      </div>
      </div>
    <img
        class="whatsapp-image-2023-10-21-at-8-icon"
        alt=""
        src="images/WhatsAppImage.png"
      />
      <div class="nbs-text">NBS</div>
      <div class="tv-25-inner"></div>
      <div class="welcome-back-ngo" id="welcomeBackNGO">Welcome Back!, NGO</div>
      <div class="recent-orders"><a href="ngorecentorders.php">Recent Orders</a></div>
      <div class="logout" id="logoutText"><a href="NGOLogout.html">Logout</a></div>
      <div class="drives" id="drivesText"><a href="ngocurrentdrives.php">Drives</a></div>
      <div class="applications" id="applicationsText"><a href="ngova.html">Applications</a></div>
      <div class="home" id="homeText"><a href="ngohome.php">Home</a></div>
    </div>

  </body>
</html>
<?php
$conn->close();
?>