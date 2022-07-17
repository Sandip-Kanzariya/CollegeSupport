<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <link rel="icon" type="image/x-icon" href="logo.png">
<style>

* {
  box-sizing: border-box;
}

    nav{
    height: 90px;
    display: flex;
    align-items: center;
    padding: 0 50px 0 0;
    position: sticky;
    top: 0;
    z-index: 10000;
    background-color: black;
}

nav ul {
    display: flex;
    list-style: none;
    justify-content: right;
    font-family: Arial, Helvetica, sans-serif;
}

nav ul li {
    margin: 0 30px;
}

nav ul li a {
    color: white;
    text-decoration: none;
    font-size: 25px;
    font-weight: 500;
    padding: 10px 12px;
    border-radius: 5px;
    transition: all 0.3s ease;
}

nav ul li a:hover {
    background-color: cyan;
    color: black;    
}

.nav-right {
    float: right;
    margin-right: -100%; 
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

.nav-right a {
    align-items: center;
    margin-left: -40%;
}

body {
    background-color: black;
}

.column {
  float: left;
  width: 25%;
  padding-top: 5%;
  padding-left: 6%;
  padding-right: 6%;
  height: 560px; /* Should be removed. Only for demonstration */
  color: white;
}

.column img {
    width: 125%;
    height: 40%;
}

.column h2 {
    font-size: 35px;
    font-family: Arial, Helvetica, sans-serif;
    padding-left: 25%;
}

.profession {
    font-size: 20px;
    font-family: Arial, Helvetica, sans-serif;
    letter-spacing: 1px;
    padding-left: 25%;
}

.information {
    font-size: 15px;
    font-family: Arial, Helvetica, sans-serif;
    padding-left: 25%;
    margin-top: 7%;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.heading {
    border-bottom-style: solid;
    font-size: 40px;
    color: white;
    font-family: Arial, Helvetica, sans-serif;
    margin-left: 7%;
    margin-right: 7%;
    margin-top: 2%;
    border-color: cyan;
}

@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
.active{
      background-color:cyan;
      color:black;
    }
</style>
</head>

<body>
    <nav>
        <a href="#">
          <img src="logo.png" style="width: 85px; height: 85px; border-radius:100%;">
        </a>
        <ul> 
          <li><a href="button.php">Home</a></li>
          <li><a href="about_us.php" class="active">About us</a></li>
          <li><a href="contact.php">Contact us</a></li>
          <li><a href="login.php">Logout</a></li>
        </ul>
        <ul>
            <div class="nav-right">
              <li><img src="profile1.png" style="width: 85px; height: 85px; border-radius:100%;"></li>
              <li><a href="#name"><?php session_start(); echo $_SESSION['username']; ?></a></li>
            </div>
        </ul>
    </nav>

    <div class="heading"><center>OUR TEAM</center></div>

    <div class="row">
        <div class="column">
            <center><img src="fenil.png" style="border-radius: 100%;"></center>
            <center><h2>Fenil Modi</h2><center>
            <center><div class="profession">Back-End Developer</div></center>
        </div>
        <div class="column">
            <center><img src="sandip.jpg" style="border-radius: 100%;"></center>
            <center><h2>Sandip Kanzariya</h2><center>
            <center><div class="profession">Back-End Developer</div></center>

        </div>
        <div class="column">
            <center><img src="soham.jpg" style="border-radius: 100%;"></center>
            <center><h2>Soham Tejani</h2><center>
            <center><div class="profession">Front-End Developer</div></center>
        </div>
        <div class="column">
            <center><img src="mit.jpg" style="border-radius: 100%;"></center>
            <center><h2>Mit Darji</h2><center>
            <center><div class="profession">Front-End Developer</div></center>
        </div>
    </div>
      
</body>
</html>