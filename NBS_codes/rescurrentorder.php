<?php
session_start();

$conn = new mysqli('localhost', 'id21897646_nbs', 'Nbs@1234', 'id21897646_nbs');

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM orders";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
  <head>
<style>
body {
  margin: 0;
  line-height: normal;
  min-height: 120vh;
  height: auto;
  width: 100%;
            position: relative;
            height: auto;
            overflow: auto;
            background: linear-gradient(180deg, #FFEAE5, #FABFB1);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: top;
            text-align: center;
            font-size: var(--font-size-11xl);
            color: var(--color-white);
            font-family: var(--font-ropa-sans);
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

:root {
  --font-ropa-sans: "Ropa Sans";

  --font-size-11xl: 30px;

  --color-white: #fff;
  --color-darkslategray: #1b4965;

  --br-xl: 20px;
}
/*.tv-15 {
            width: 100%;
            position: relative;
            height: auto;
            overflow: auto;
            background: linear-gradient(180deg, #FFEAE5, #FABFB1);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: top;
            text-align: center;
            font-size: var(--font-size-11xl);
            color: var(--color-white);
            font-family: var(--font-ropa-sans);
        }*/

        body::before {
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

    .tv-15-child {
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
.tv-15-child:hover {
  width: 240px; /* Expanded width */
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

.rectangle-div,
.tv-15-inner,
.tv-15-item {
  position: absolute;
  top: 85px;
  left: 365px;
  border-radius: var(--br-xl);
  background-color: var(--color-darkslategray);
  width: 290px;
  height: 565px;
}
.rectangle-div,
.tv-15-inner {
  left: 680px;
  height: 560px;
}
.rectangle-div {
  left: 993px;
}
.current-orders {
  position: absolute;
  top: 35px;
  left: 398px;
  color: var(--color-darkslategray);
}
.activity-history,
.current-requests {
  position: absolute;
  top: 221px;
  left: 77px;
}
.activity-history {
  top: 300px;
}
.current-orders1,
.new-order,
.rectangle-icon {
  position: absolute;
  top: 146px;
  left: 77px;
}
.new-order,
.rectangle-icon {
  top: 77px;
}
.tv-17-item {
  position: absolute;
  top: 45vh;
  left: 2vw;
  width: 36px;
  height: 36px;
  object-fit: cover;
}
.tv-17-child1, 
.tv-17-child2,
.tv-17-inner {
  position: absolute;
  top: 58.5vh;
  left: 2vw;
  width: 36px;
  height: 36px;
  object-fit: cover;
}
.tv-17-child1,
.tv-17-child2 {
  top: 30vh;
}
.tv-17-child2 {
  top: 15vh;
}.order-date,
.order-no {
  position: absolute;
  top: 227px;
  left: 372px;
  text-align: center;
}
.order-date {
  top: 302px;
  left: 372px;
  width:145px;
}
.food-item,
.order-details,
.quantity {
  position: absolute;
  top: 119px;
  left: 375px;
  text-align: center;
}
.food-item,
.quantity {
  top: 409px;
  left: 370px;
}
.quantity {
  top: 491px;
  left: 370px;
}
     
.nav-links {
  list-style: none;
  position: relative;
  text-align: left;
  top: 10vh;
  opacity: 0;
  z-index:1000;
}
.tv-15-child:hover .nav-links {
  opacity: 1;
}
.nav-links li
{
  position: relative;
  top: -2vh;
  margin-top: -3.8vh;
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
.container {
  position: relative;
  background: #1b4965;
  border-radius: 50px;
  max-height: 90vh;
  width: 24vw;
  top: 12vh;
  margin: 2vh 1%; 
  display: inline-block; 
  vertical-align: top; 
  box-sizing: border-box; 
  text-align: left;
}

.container p{
    padding: 2vh 1vw;
}
</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./index.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Ropa Sans:wght@400&display=swap"
    />
  </head>
  <body>
      
        <div class="tv-15-child">
      <ul class="nav-links">
      <li><a href="restneworder.php"><p>New Order</p></a></li>
      <li><a href="rescurrentorder.php"><p>Current Orders</p></a></li>
      <li><a href="restcurrentreq.php"><p>Current Requests</p></a></li>
      <li><a href="restactivity.php"><p>Activity History</p></a></li>
      <li><a href="restlogin.html"><p>Logout</p></a></li>
    </ul>
    </div>

      <img class="fas tv-17-child1" alt="" src="/images/rectangle-16@2x.png" />
      <img class="fas tv-17-item" alt="" src="/images/rectangle-14@2x.png" />
      <img class="fas tv-17-child2" alt="" src="images/rectangle-15@2x.png" />      
      <img class="fas tv-17-inner" alt="" src="images/rectangle-17@2x.png" />
      <?php 
      if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
              echo "<div class='container'>";
              echo "<p>Order No: " . $row["OrderID"]. "</p>";
              echo "<p>Expiry Date: " . $row["Expiry"]. "</p>";
              echo "<p>Food item: " . $row["name"]. "</p>";
              echo "<p>Quantity: " . $row["Quantity"]. "</p>";
            echo '</div>';
          }
      } 
      else {
          echo "0 results";
      }
      ?>
      
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
<?php
$conn->close();
?>