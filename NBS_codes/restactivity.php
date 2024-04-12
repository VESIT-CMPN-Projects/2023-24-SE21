<?php
session_start();

$conn = new mysqli('localhost', 'id21897646_nbs', 'Nbs@1234', 'id21897646_nbs');

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT orders.OrderID, NGOVerify.Name AS NGO_Name
        FROM orders
        INNER JOIN NGOVerify ON orders.UniqueID = NGOVerify.UniqueID";

$result = $conn->query($sql);
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
  --font-ropa-sans: "Ropa Sans";
  --font-merusuar-script:"Mercusuar Script" ;

  --font-size-11xl: 30px;

  --color-white: #fff;
  --color-darkslategray: #1b4965;
  --color-steelblue: rgba(51, 101, 131, 0.6);

  --br-xl: 20px;
}

.nbs-text {
    position: absolute;
    top:120px;
    left: 92.5vw;
    width: 6vw;
    height: 13vh;
    object-fit: fill;
    font-family: var(--font-merusuar-script);
    font-size: 27px;
    color: #1b4965;
}

    .tv-16-child {
  width: 40px;  
  height: 100vh;
  background: linear-gradient(
      180deg,
      rgba(27, 73, 101, 0.6),
      rgba(1, 14, 22, 0.6)
    ),
    #1b4965;
  position: fixed;
  top: 0;
  left: 0;
  padding: 20px 30px;
  transition: width 0.2s linear;
}
.tv-16-child:hover {
  width: 240px; 
}
.tv-16-1 {
  position: absolute;
  top: 43vh;
  left: 29px;
  width: 36px;
  height: 36px;
  object-fit: cover;
}
.tv-16-item {
  position: absolute;
  top: 339px;
  left: 383px;
  border-radius: 0 0 var(--br-xl) var(--br-xl);
  background-color: var(--color-darkslategray);
  width: 240px;
  height: 200px;
}
.tv-16-child12,
.tv-16-child22,
.tv-16-in {
  position: absolute;
  top: 58vh;
  left: 33px;
  width: 36px;
  height: 36px;
  object-fit: cover;
}
.tv-16-child12,
.tv-16-child22 {
  top: 28vh;
}
.tv-16-child22 {
  top: 13vh;
}
.completed-on,
.ngo,
.order-no {
  position: absolute;
  top: 352px;
  left: 392px;
  text-align: center;
}
.completed-on,
.ngo {
  top: 411px;
  left: 393px;
}
.completed-on {
  top: 474px;
  left: 389px;
}
.rectangle-div,
.tv-16-child1,
.tv-16-child2,
.tv-16-child3,
.tv-16-inner {
  position: absolute;
  top: 339px;
  left: 706px;
  border-radius: 0 0 var(--br-xl) var(--br-xl);
  background-color: var(--color-darkslategray);
  width: 240px;
  height: 200px;
}
.activity-history {
  position: absolute;
  top: 62px;
  left: 398px;
  color: var(--color-darkslategray);
}
.activity-history2,
.current-requests {
  position: absolute;
  top: 222px;
  left: 77px;
}
.activity-history2 {
  top: 301px;
}
.current-orders,
.new-order,
.rectangle-icon {
  position: absolute;
  top: 147px;
  left: 77px;
}
.new-order,
.rectangle-icon {
  top: 78px;
}
.rectangle-icon {
  top: 222px;
  left: 29px;
  width: 30px;
  height: 30px;
  object-fit: cover;
}
.whatsapp-image {
    position: absolute;
    top: 18px;
    left: 92.5vw;
    width: 6vw;
    height: 13vh;
    object-fit: fill;
}
.tv-16-child4,
.tv-16-child5,
.tv-16-child6 {
  position: absolute;
  top: 304px;
  left: 33px;
  width: 24px;
  height: 24px;
  object-fit: cover;
}
.tv-16-child5,
.tv-16-child6 {
  top: 151px;
}
.tv-16-child6 {
  top: 82px;
}

  .nav-links {
  list-style: none;
  position: relative;
  text-align: left;
  top: 10vh;
  opacity: 0;
  z-index:1000;
}
.tv-16-child:hover .nav-links {
  opacity: 1;
}
.nav-links li
{
  position: relative;
  margin-top: -3.6vh;
  margin-bottom: 5.2vh;
  margin-left: -2.8vw;
  width: 100%;
  height: 100%;
}
.nav-links li a{
    font-size: 30px;
  color: #fff;
  text-decoration: none;
  display: flex;
  align-items: center;
  border-radius: 10px;
  padding-left: 3.2vw;
  width: 100%;
}


.nav-links li a:hover {
  color: #1b4965;
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 2px 2px rgba(255, 255, 255, 0.4);
  transition: 0.3s;
}
 .tv-16 {
            width: 100%;
            position: relative;
            height: 100vh;
            overflow: hidden;
            background: linear-gradient(180deg, #FFEAE5, #FABFB1);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: top;
            text-align: center;
            font-size: var(--font-size-11xl);
            color: var(--color-white);
            font-family: var(--font-ropa-sans);
        }

        .tv-16::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url(images/tv--17@3x.png);
            opacity: 0.3;
            background-size: 70%;
        }
 .tv-15-item {
  position: absolute;
  top: 45vh;
  left: 2vw;
  width: 36px;
  height: 36px;
  object-fit: cover;
}
.tv-15-child1,
.tv-15-child2,
.tv-15-inner {
  position: absolute;
  top: 58.5vh;
  left: 2vw;
  width: 36px;
  height: 36px;
  object-fit: cover;
}
.tv-15-child1,
.tv-15-child2 {
  top: 30vh;
}
.tv-15-child2 {
  top: 15vh;
}
.contain{
    position: relative;
   font-size: 1.5rem;
   background-color: #1b4965;
   max-height: 40vh;
 max-width: 25vw;
    text-align: left;
    padding: 2px;
    z-index: 1000;
    top: 20vh;
    left: 25vw;
    border-radius: 30px;
    margin-bottom: 10vh;
}
.contain p
{
    margin-left: 10%;
}
    </style>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./index.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Mercusuar Script:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Ropa Sans:wght@400&display=swap"
    />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inknut Antiqua:wght@400;600&display=swap" />


    
  </head>
  <body>
    <div class="tv-16">
      <div class="nbs-text">NBS</div>
      <div class="tv-16-child"></div>
<?php  
if ($result->num_rows > 0) {
  // Output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<div class='contain'>";
    echo "<p>Order No: " . $row["OrderID"]. "</p>";
    echo "<p>NGO: " . $row["NGO_Name"]. "</p>";
    echo "</div>";
  }
} else {
  echo "0 results";
}

$conn->close();
?>

      
      <div class="activity-history">Activity History</div>
   <div class="tv-16-child">
      <ul class="nav-links">
      <li><a href="restneworder.php"><p>New Order</p></a><div class="active"></div></li>
      <li><a href="rescurrentorder.php"><p>Current Orders</p></a><div class="active"></div></li>
      <li><a href="restcurrentreq.php"><p>Current Requests</p></a><div class="active"></div></li>
      <li><a href="restactivity.php"><p>Activity History</p></a><div class="active"></div></li>
     <li><a href="restlogin.html"><p>Logout</p></a><div class="active"></div></li>
    </ul>
      <img class="fas tv-15-child1" alt="" src="/images/rectangle-16@2x.png" />
    <img class="fas tv-15-item" alt="" src="/images/rectangle-14@2x.png" />
    <img class="fas tv-15-child2" alt="" src="images/rectangle-15@2x.png" />
    <img class="fas tv-15-inner" alt="" src="images/rectangle-17@2x.png" />
    </div>
    </div>
    <img
        class="whatsapp-image"
        alt=""
        src="images/WhatsAppImage.png"
      />
  </body>
</html>
<?php
$conn->close();
?>