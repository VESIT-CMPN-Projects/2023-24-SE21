<?php
session_start();

$conn = new mysqli('localhost', 'id21897646_nbs', 'Nbs@1234', 'id21897646_nbs');

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Type, name, Quantity, Expiry, GSTIN FROM FoodEntryRes";
$result = $conn->query($sql);
$sql2 = "Select RestaurantVerify.Name,FoodEntryRes.GSTIN from FoodEntryRes join RestaurantVerify on FoodEntryRes.GSTIN = RestaurantVerify.GSTIN;";
$result2 = $conn->query($sql2);
if ($result2->num_rows>0){
    $row2 = $result2->fetch_assoc();
    $resname = $row2["Name"];
    $GSTIN = $row2["GSTIN"];
}
    

if(isset($_SESSION['UniqueID'])) {
    $UniqueID = $_SESSION['UniqueID'];
    $sql1 = "SELECT Name FROM NGOVerify WHERE UniqueID = '$UniqueID'";
    $result1 = $conn->query($sql1);

    if ($result1->num_rows > 0) {
        $row1 = $result1->fetch_assoc();
        $ngoName = $row1["Name"];
    } else {
        $ngoName = ""; 
    }
} else {
 
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
  --font-size-mini: 15px;

  --color-white: #fff;
  --color-darkslategray-100: #1b4965;
  --color-black: #000;

  --br-21xl: 40px;
}
.tv-24-child {
  top: 90px;
  left: 280px;
  background-color: var(--color-darkslategray-100);
  width: 980px;
  height: 261px;
}
.tv-24-child,
.tv-24-inner,
.tv-24-item {
  position: absolute;
  border-radius: var(--br-21xl);
  border: 1px solid var(--color-black);
  box-sizing: border-box;
}
.tv-24-item {
  top: 392px;
  left: 280px;
  background-color: var(--color-darkslategray-100);
  width: 980px;
  height: 261px;
}
.tv-24-inner {
  top: 0;
  left: -66px;
  background-color: var(--color-darkslategray-100);
  width: 20vw;
  height: 441vh;
}
.welcome-back {
  position: fixed;
  top: 35px;
  left: 20px;
  font-size: 30px;
  font-family: var(--font-jockey-one);
  display: inline-block;
  width: 197px;
  height: 70px;
  cursor: pointer;
}
.applications,
.drives,
.home1,
.logout,
.order,
.order1,
.recent-orders {
  position: fixed;
  top: 195px;
  left: 22px;
  display: inline-block;
  width: 218px;
  height: 50px;

}
.applications,
.drives,
.home1,
.logout,
.order,
.order1 {
  top: 640px;
  cursor: pointer;
}
.applications,
.drives,
.home1,
.order,
.order1 {
  top: 249px;
}
.applications,
.home1,
.order,
.order1 {
  top: 310px;
  left: 20px;
}
.home1,
.order,
.order1 {
  top: 145px;
  left: 22px;
  width: 150px;
}
.order{
    position: relative;
  display: inline-block;
  width: 5vh;
  height: 5vh;
  top: -20vh;
  left: 48vw;
  font-size: 1.2rem;
}
.order1 {
  top: 570.31px;
  left: 1146px;
}

.vector-icon,
.vector-icon1,
.vector-icon2 {
  position: absolute;
  height: 12%;
  width: 12%;
  top: 15vh;
  left: 47vw;
  max-width: 100%;
  overflow: hidden;
  filter:invert(100%);
  max-height: 100%;
}
.vector-icon2 {
  top: 70%;
  right: 7.29%;
  bottom: 22.83%;
  left: 76.2%;
}
.vector-icon1 {
  top: 39%;
  right: 7.29%;
  bottom: 22.83%;
  left: 76.2%;
}
.type {
  margin: 0;
}
.type-quantity-expires-container
 {
  position: relative;
  top: 12vh;
  left: 24vw;
  display: inline-block;
  width: 60vw;
  height: auto;
  max-height: 38vh;
  cursor: pointer;
  background-color: #1b4965;
  border-radius: 30px;
  z-index: 1000;
  margin-bottom: 18px;
}
.type-quantity-expires-container p{
    padding-left: 3vw;
}
.type-quantity-expires-container1 {
  position: relative;
  top: 48vh;
  left: -5vw;
  display: inline-block;
  width: 60vh;
  height: 20vh;
  cursor: pointer;
}
.download-logo {
  position: absolute;
  top: 180px;
  left: 1090px;
  width: 50px;
  height: 50px;
  overflow: hidden;
}
.tv-24 {
  width: 100%;
  position: relative;
  background: linear-gradient(180deg, #ffeae5, #fabfb1);
  min-height: 100vh;
  height: auto;
  overflow: hidden;
  text-align: left;
  font-size: var(--font-size-xl);
  color: var(--color-white);
  font-family: var(--font-inknut-antiqua);
}
.recent-orders a {
  color: #ffffff; 
  text-decoration: none; 
  transition: color 0.3s ease; 
}

.recent-orders a:hover {
  color: #0000ff; 
}

.home1 a {
  color: #ffffff; 
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
    </style>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./index.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Jockey One:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inknut Antiqua:wght@400&display=swap"
    />
  </head>
  <body>
      
    <div class="tv-24">
      <div class="tv-24-inner"></div>
      <div class="welcome-back" id="welcomeBackText">Welcome Back!,<?php echo $ngoName; ?></div>
      <div class="recent-orders"><a href="ngorecentorders.php">Recent Orders</a></div>
      <div class="logout" id="logoutText"><a href="NGOLogout.html">Logout</a></div>
      <div class="drives" id="drivesText"><a href="ngocurrentdrives.php">Drives</a></div>
      <div class="applications" id="applicationsText"><a href="ngova.html">Applications</a></div>
      <div class="home1" id="homeText"><a href="ngohome.php">Home</a></div>
      <!--<div class="order" id="orderText">Order</div>
      <div class="order1" id="orderText1">Order</div>
      
      <a href="ordersuccess.html", onClick ="handleButtonClick()"><img class="vector-icon" alt="" src="/images/vector.svg" /></a>

      <a href="ordersuccess.html", onClick ="handleButtonClick()"> <img class="vector-icon1" alt="" src="/images/vector.svg" /></a>
      <a href="ordersuccess.html", onClick ="handleButtonClick()"> <img class="vector-icon2" alt="" src="/images/vector.svg" /></a>
      <div class="type-quantity-expires-container" id="typeQuantityExpires">-->
         <?php
    
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
          
        $GSTIN = $row['GSTIN'];
        echo "<div class='type-quantity-expires-container' id='typeQuantityExpires'>";
        echo "<p class='type'>Type: " . $row["Type"] . "</p>";
        echo "<p class='type'>Name: " . $row["name"] . "</p>";
        echo "<p class='type'>Quantity: " . $row["Quantity"] . "</p>";
        echo "<p class='type'>Expires on: " . $row["Expiry"] . "</p>";
        echo "<p class='type'>From: " . $resname . "<br><br> </p>";
        echo '<div class="order" id="orderText">Order</div>';
        echo '<a href="ordersuccess.html", onClick ="handleButtonClick()"> <img class="vector-icon" alt="" src="/images/vector.svg" /></a>';
        echo "</div>";
      }
     
    } else {
      echo "0 results";
    }
    ?>
     </div>
    <!--  <div class="type-quantity-expires-container1" id="typeQuantityExpires1">
        <p class="type">Type:</p>
        <p class="type">Quantity:</p>
        <p class="type">Expires on:</p>
        <p class="type">From:</p>
      </div>
      <div class="download-logo"></div>
    </div>-->

<script>
document.querySelectorAll('.vector-icon, .vector-icon1, .vector-icon2').forEach(button => {
    button.addEventListener('click', function() {
        const foodType = this.parentNode.parentNode.querySelector('p:nth-child(1)').textContent.split(': ')[1];
        const foodName = this.parentNode.parentNode.querySelector('p:nth-child(2)').textContent.split(': ')[1];
        const quantity = this.parentNode.parentNode.querySelector('p:nth-child(3)').textContent.split(': ')[1];
        const expiry = this.parentNode.parentNode.querySelector('p:nth-child(4)').textContent.split(': ')[1];
        const from = this.parentNode.parentNode.querySelector('p:nth-child(5)').textContent.split(': ')[1];
        
        const data = {
            foodType: foodType,
            foodName: foodName,
            quantity: quantity,
            expiry: expiry,
            from: from,
            UniqueID: '<?php echo $UniqueID; ?>',
            GSTIN: '<?php echo $GSTIN; ?>'
        };

        fetch('submit_order.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(data),
        })
        .then(response => {
            if (response.ok) {
                console.log('Order placed successfully!');
                
            } else {
                console.error('Failed to place order');
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
});
</script>

  </body>
</html>
<?php
$conn->close();
?>