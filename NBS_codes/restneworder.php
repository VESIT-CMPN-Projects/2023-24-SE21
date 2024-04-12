<?php

session_start();


$servername = "localhost"; 
$username = "id21897646_nbs";
$password = "Nbs@1234"; 
$dbname = "id21897646_nbs"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form is for adding an item
    if (isset($_POST['additem'])) {
        // Get user input for adding item
        $name = $_POST['name'];
        $quantity = $_POST['quantity'];
        $type = $_POST['type'];
        $expiry = $_POST['expiry'];
        
        $expiry = date('Y-m-d', strtotime($expiry));

        $gstin = $_SESSION['gstin'];

        $stmt = $conn->prepare("INSERT INTO FoodEntryRes (Type, Name, Quantity, Expiry, GSTIN) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $type, $name, $quantity, $expiry, $gstin);

        $stmt->execute();

        $stmt->close();
        
        header("Location: ".$_SERVER['PHP_SELF']);
        exit;
    }
}

$gstin = $_SESSION['gstin'];
$sql = "SELECT * FROM FoodEntryRes WHERE GSTIN = '$gstin' ORDER BY OrderID desc";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
  <head>
    <style>

    body {
  margin: 0;
  line-height: normal;
  height: 150vh;
}

:root {
  /* fonts */
  --font-ropa-sans: "Ropa Sans";

  /* font sizes */
  --font-size-11xl: 30px;

  /* Colors */
  --color-black: #000;
  --color-darkslategray: #1b4965;
  --color-white: #fff;

  /* Border radiuses */
  --br-21xl: 40px;
}
.whatsapp-image {
    position: absolute;
    top: 18px;
    left: 92.5vw;
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
 .tv-14 {
            width: 100%;
            position: relative;
            height: 180vh;
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

        .tv-14::before {
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
  .tv-14-child {
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

        .tv-14-child:hover {
            width: 240px;
        }
body::-webkit-scrollbar {
  width: 0.8vw;
  height: 0.8vw;
}
body::-webkit-scrollbar-track
{
  background: #e3f3fd ;
}
body::-webkit-scrollbar-thumb
{
  background-color: #1b4965;
  border-radius: 10px;
}

.scrollbar-frame {
  position: absolute;
  height: 200px;
  overflow: auto;
}
.submit {
  padding: 1vh 1vw;
  position: relative;
  width: 200px;
  margin: 1vw;
  font-family: var(--font-ropa-sans);
  font-size: 1.5rem;
  background-color: #1b4965;
  color: white;
  border: none;
  height: 50px;
  border-radius: 40px;
  cursor: pointer;
  transition: background-color 0.2s;
  left: 3.5vw;
  top: 45vh;
    
}
  .submit:hover
  {
      background-color: blue;
  }
 
.tv-14-inner {
  position: absolute;
  top: 75px;
  left: 577px;
  border-radius: 20px;
  border: 2px solid var(--color-darkslategray);
  width: 480px;
  height: 240px;
}
.food-item,
.quantity1,
.typeoffood,
.expirydate{
    
  position: absolute;
  top: 80px;
  left: 586px;
  color: var(--color-darkslategray);
  text-align: center;
  font: var(--font-ropa-sans);
  font-size: 24px;
  display:block;
}
.quantity1 {
  left: 866px;
  
}
.food-item{
    width:167px;
}
.typeoffood{
    width:121px;
  top: 165px;
  left: 580px;
}
.expirydate{
    top:165px;
    left:840px;
    width:218px;
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

.nav-links {
  list-style: none;
  position: relative;
  text-align: left;
  top: 10vh;
  opacity: 0;
  z-index:1000;
}
.tv-14-child:hover .nav-links {
  opacity: 1;
}
.nav-links li
{
  position: relative;
  margin-top: -4vh;
  margin-bottom: 5.4vh;
  margin-left: -2.8vw;
  width: 125%;
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
.wrapper{
    width: 30vw;
    margin: 130px auto 0;
    position: relative;
    top: 30vh;
    left: 3.8vw;
}
.select-btn, li{
  display: flex;
  align-items: center;
  cursor: pointer;
}
.select-btn{
  height: 8vh;
  padding: 0 2vw;
  font-size: 1.5rem;
  background: #1b4965;
  border-radius: 40px;
  justify-content: space-between;
}
.select-btn i{
  font-size: 31px;
  transition: transform 0.3s linear;
}

.content{
    display:none;
    margin-top: 2vh;
    padding: 1vh;
    border-radius: 20px;
    background: #1b4965;
}
.wrapper.active .content{
    display: block;
}
.content .search{
    position: relative;
}
.wrapper.active .select-btn i{
    transform: rotate(-180deg);
} 
.search i{
    top: 34%;
    left: 2vw;
    line-height: 2vh;
    color: #1b4965;
    font-size: 1rem;
    position: absolute;
}
.search input{
    height: 50px;
    width: 80%;
    outline: none;
    border-radius: 30px;
    font-size: 1rem;
    padding: 0 20px 0 43px;
    border: 1px solid #1ba3f7;
}
.content .options{
    margin-top: 8vh;
    max-height: 250px;
    overflow-y: auto;
}
.options::-webkit-scrollbar {
  width: 0.8vw;
}
.options::-webkit-scrollbar-track
{
    border-radius: 10px;
  background: #e3f3fd ;
}
.options::-webkit-scrollbar-thumb
{
  background-color: #1ba3f7;
  border-radius: 10px;
}

.options li{
    height: 2vh;
    padding: 2vh 0.5vw;
    font-size: 1.5rem;
    border-radius: 5px; 
}
.options li:hover{
    background: #1ba3f7;
    border-radius: 10px;
    width: 90%

}
.nameoffooditem input{
 padding: 1vh 1vw;
 position: relative;
  margin: 1.5vw;
  font-family: var(--font-ropa-sans);
  font-size: 1.5rem;
  background-color: #1b4965;
  color: white;
  border: none;
  height: 45px;
  width: 28vw;
  border-radius: 40px;
  cursor: pointer;
  left: 4vw;
  top: 30vh;
}
.quantity2 input{
 padding: 1vh 1vw;
 position: relative;
  margin: 1.5vw;
  font-family: var(--font-ropa-sans);
  font-size: 1.5rem;
  background-color: #1b4965;
  color: white;
  border: none;
  height: 45px;
  width: 28vw;
  border-radius: 40px;
  cursor: pointer;
  left: 4vw;
  top: 26vh;
}
.expiry{ 
    position: relative;
    margin: 1.5vw;
    width: 28vw;
    padding-top: 2vh;
    font-family: var(--font-ropa-sans);
    font-size: 1.5rem;
    background-color: #1b4965;
    border: none;
    color: white;
    border: none;
    height: 45px;
    border-radius: 40px;
    cursor: pointer;
    left: 37vw;
    top: 22vh;
    outline: none; 
    text-align: left;
    padding-left: 2vw;
}
.calendar{
    padding-left: 10vw;
    top: -2vh;
}
.expiry input[type="date"]{
    font-family: var(--font-ropa-sans);
    background-color: #1b4965;
    color: #fff;
    font-size: 1.2rem;
    width: 15vw;
    position: relative;
    top: -3.2vh;
}
.additem {
  padding: 1vh 1vw;
  position: relative;
  width: 200px;
  margin: 1vw;
  font: var(--font-ropa-sans);
  font-size: 1.5rem;
  background-color: #1b4965;
  color: white;
  border: none;
  height: 50px;
  border-radius: 40px;
  cursor: pointer;
  transition: background-color 0.2s;
  left: 3.5vw;
  top: 25vh;
}
.additem:hover{
    background-color: blue;
}
.logoutbtn{
  position: fixed;
  width: 7vh;
  height: 7vh;
  left: 85vw;
  color: #fff; 
  top:85vh;
  border-radius: 50%; 
  text-align: center;
  font-size: 1.2rem;
  text-decoration: none; 
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
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Mercusuar Script:wght@400&display=swap"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
  <body>

<div class="tv-14">
    <div class="tv-14-child">
        <ul class="nav-links">
            <li><a href="restneworder.php"><p>New Order</p></a><div class="active"></div></li>
            <li><a href="rescurrentorder.php"><p>Current Orders</p></a><div class="active"></div></li>
            <li><a href="restcurrentreq.php"><p>Current Requests</p></a><div class="active"></div></li>
            <li><a href="restactivity.php"><p>Activity History</p></a><div class="active"></div></li>
            <li><a href="restlogin.html"><p>Logout</p></a><div class="active"></div></li>
        </ul>
          <img class="fas tv-15-child1" alt="" src="/images/rectangle-16@2x.png" />
           <img
        class="whatsapp-image"
        alt=""
        src="images/WhatsAppImage.png"
      />
    <img class="fas tv-15-item" alt="" src="/images/rectangle-14@2x.png" />
    <img class="fas tv-15-child2" alt="" src="images/rectangle-15@2x.png" />
    <img class="fas tv-15-inner" alt="" src="images/rectangle-17@2x.png" />
    <div class="logoutbtn"><a href="restlogin.html"><i class="fa-solid fa-right-from-bracket"></i></a></div>
    
     </div>
        
         <form method="POST">
    <div class="wrapper">
        <div class="select-btn">
            <span >Type of Food Item</span>
            <i class="fa fa-angle-down"></i>
        </div>
        <div class="content">
            <div class="search">
                <i class="fa fa-search"></i>
                <input type="text" name="type_nope" placeholder="Search">
            </div>
            <ul class="options"></ul>
        </div>
    </div>  
    <input type="hidden" name="type" value="">
    <div class="nameoffooditem"><input type="text" name="name" placeholder="Name of Food Item"></div>
    <div class="quantity2"><input type="text" name="quantity" placeholder="Quantity"></div>
    <div class="expiry">
        Expiry
        <div class="calendar">
            <input type="date" name="expiry">
        </div>
    </div>
    <button type="submit" class="additem" name="additem"><i class="fa fa-plus"></i>Add Item</button>
</form>

    </div>
     <div class="nbstext">NBS</div>
        </div>
    <div class="tv-14-inner"></div>
    
      <?php
       if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
        ?>
        <div class="food-item"> Name of food: <?php echo $row["Name"]; ?></div><br>
        <div class="quantity1"> Quantity:<?php echo $row["Quantity"]; ?></div><br>
        <div class="typeoffood"> Type of food:<?php echo $row["Type"]; ?></div>
        <div class="expirydate"> Expiry:<?php echo $row["Expiry"]; ?></div>
    
        <?php
    
} else {
    echo "0 results";
}
?>   
    </div>
  
    <script>
        const wrapper = document.querySelector(".wrapper"),
        selectBtn = wrapper.querySelector(".select-btn"),
        searchInp = wrapper.querySelector("input"),
        options = wrapper.querySelector(".options");

        let fooditems = ["Rice", "Roti", "Daal", "Vegetable dish", "Breads", "Others"];

        function addFI(selectedFI) {
            options.innerHTML = "";
            fooditems.forEach(fi => {
                let isSelected = fi == selectedFI ? "selected" : "";
                let li = `<li onclick="updateName(this)" class="${isSelected}">${fi}</li>`;
                options.insertAdjacentHTML("beforeend", li);
            });
        }

        addFI();

        function updateName(selectedLi) {
            searchInp.value = "";
            addFI(selectedLi.innerText);
            wrapper.classList.remove("active");
            selectBtn.firstElementChild.innerText = selectedLi.innerText;
            document.querySelector('input[name="type"]').value = selectedLi.innerText; 
        }

        searchInp.addEventListener("keyup", () => {
            let arr = [];
            let searchWord = searchInp.value.toLowerCase();
            arr = fooditems.filter(data => {
                return data.toLowerCase().startsWith(searchWord);
            }).map(data => {
                let isSelected = data == selectBtn.firstElementChild.innerText ? "selected" : "";
                return `<li onclick="updateName(this)" class="${isSelected}">${data}</li>`;
            }).join("");
            options.innerHTML = arr ? arr : `<p style="margin-top: 10px;">Food Item not found</p>`;
        });

        selectBtn.addEventListener("click", () => wrapper.classList.toggle("active"));

    </script>
        </body>
</html>
