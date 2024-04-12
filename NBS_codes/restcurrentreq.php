<?php
session_start();

$conn = new mysqli('localhost', 'id21897646_nbs', 'Nbs@1234', 'id21897646_nbs');

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT orders.UniqueID, NGOVerify.Name AS NGO_Name
        FROM orders
        INNER JOIN NGOVerify ON orders.UniqueID = NGOVerify.UniqueID";

$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <style>
      .tv-17-child {
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
.whatsapp-image {
    position: absolute;
    top: 18px;
    left: 93.7vw;
    width: 6vw;
    height: 13vh;
    object-fit: fill;
}
.nbstext {
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
.tv-17-child:hover {
  width: 240px; 
}

.group-child {
  border-radius: var(--br-21xl);
  background-color: var(--color-darkslategray);
  border: 2px solid var(--color-darkslategray);
  box-sizing: border-box;
}
.group-child,
.group-div,
.group-frame {
  position: absolute;
  top: 0;
  left: 0;
  width: 200px;
  height: 50px;
}
.group-div {
  top: 70px;
}
.add-item,
.add-item1 {
  position: absolute;
  top: 8px;
  right: 0;
  display: inline-block;
  width: 200px;
}
.add-item1 {
  top: 78px;
}
.group-container,
.group-inner,
.group-wrapper {
  position: absolute;
  top: 0;
  left: 0;
  width: 202px;
  height: 120px;
}
.group-inner,
.group-wrapper {
  top: 242px;
  left: 15px;
}
.group-inner {
  top: 0;
  left: 0;
  border-radius: var(--br-xl);
  width: 240px;
  height: 200px;
}
.group-parent,
.group-parent1,
.group-parent3 {
  position: absolute;
  top: 131px;
  left: 397px;
  width: 240px;
  height: 362px;
}
.group-parent1,
.group-parent3 {
  left: 700px;
}
.group-parent3 {
  left: 1010px;
}
.current-requests {
  position: absolute;
  top: 222px;
  left: 77px;
  text-align: left;
}
.activity-history,
.current-orders,
.new-order {
  position: absolute;
  top: 301px;
  left: 77px;
  text-align: left;
}
.current-orders,
.new-order {
  top: 147px;
}
.new-order {
  top: 78px;
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
}


.ngo-id,
.ngo-name {
  position: absolute;
 font-family: var(--font-ropa-sans);

  top: 157px;
  left: 416px;
}
.ngo-name {
  top: 234px;
  left: 412px;

}

 .tv-17 {
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
        }


        .tv-17::before {
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
.add-item,
.add-item1 {
  padding: 8px 16px;
  margin: 4px;
  font-size: 16px;
  background-color: #1b4965;
  color: white;
  border: none;
  height: 50px;
  border-radius: 20px;
  cursor: pointer;
  transition: background-color 0.2s;
}

.add-item:hover,
.add-item1:hover {
  background-color: blue;
}
.nav-links {
  list-style: none;
  position: relative;
  text-align: left;
  top: 10vh;
  opacity: 0;
  z-index:1000;
}
.tv-17-child:hover .nav-links {
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
.nav-links li:nth-child(1):hover a ~ .tv-17-child1 {
  filter: rotate(180deg);
}

.nav-links li:nth-child(2):hover a ~ .active {
  top: 19.5vh; /* Adjusted position for the second list item */
}

.nav-links li:nth-child(3):hover a ~ .active {
  top: 34.9vh; 
}

.nav-links li:nth-child(4):hover a ~ .active {
  top: 50vh; /* Adjusted position for the fourth list item */
}

</style>
    <link rel="stylesheet" href="./global.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Ropa Sans:wght@400&display=swap"
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
      href="https://fonts.googleapis.com/css2?family=Inknut Antiqua:wght@400;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Tenali Ramakrishna:wght@400&display=swap"
    />

  </head>
  <body>
    <div class="tv-17">
      <div class="group-parent">
        <div class="group-wrapper">
          <div class="group-container">
            <div class="group-frame">
              <div class="group-frame">
              </div>
            </div>
            <div class="group-div">
              <div class="group-frame">
              </div>
            </div>
            <button class="add-item">Accept</button>
            <button class="add-item1">Decline</button>
          </div>
        </div>
        <img class="group-inner" alt="" src="/images/rectangle-10.svg" />
      </div>
      <div class="group-parent1">
        <div class="group-wrapper">
          <div class="group-container">
            <div class="group-frame">
              <div class="group-frame">
                </div>
            </div>
            <div class="group-div">
              <div class="group-frame">
            </div>
            </div>
            <button class="add-item">Accept</button>
            <button class="add-item1">Decline</button>
          </div>
        </div>
        <img class="group-inner" alt="" src="/images/rectangle-10.svg" />
      </div>
      <div class="group-parent3">
        <div class="group-wrapper">
          <div class="group-container">
            <div class="group-frame">
              <div class="group-frame">
              </div>
            </div>
            <div class="group-div">
              <div class="group-frame">
              </div>
            </div>
            <button class="add-item">Accept</button>
            <button class="add-item1">Decline</button>
          </div>
        </div>
        <img class="group-inner" alt="" src="/images/rectangle-10.svg" />
      </div>
      <div class="tv-17-child">
      <ul class="nav-links">
      <li><a href="restneworder.php"><p>New Order</p></a></li>
      <li><a href="rescurrentorder.php"><p>Current Orders</p></a></li>
      <li><a href="restcurrentreq.php"><p>Current Requests</p></a></li>
      <li><a href="restactivity.php"><p>Activity History</p></a></li>
      <li><a href="restlogin.html"><p>Logout</p></a></li>
    </ul>
      <div class="nbstext">NBS</div>
        </div>
      <img class="fas tv-17-child1" alt="" src="/images/rectangle-16@2x.png" />
      <img class="fas tv-17-item" alt="" src="/images/rectangle-14@2x.png" />
      <img class="fas tv-17-child2" alt="" src="images/rectangle-15@2x.png" />      
      <img class="fas tv-17-inner" alt="" src="images/rectangle-17@2x.png" />
    <?php 
    if ($result->num_rows > 0) {
  // Output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<div class='ngo-id'>NGO ID: " . $row["UniqueID"]. "</div>";
    echo "<div class='ngo-name'>NGO Name: " . $row["NGO_Name"]. "</div>";
  }
} else {
  echo "0 results";
}

$conn->close();
?>
     <!-- <div class="ngo-id">NGO ID:</div>
      <div class="ngo-name">NGO Name:</div>-->
    <img
        class="whatsapp-image"
        alt=""
        src="images/WhatsAppImage.png"
      />
    </div>
  </body>
</html>
