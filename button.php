<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Menu</title>
    <link rel="icon" type="image/x-icon" href="logo.png">
<style>

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
    font-family: Arial, Helvetica, sans-serif;
    color: white;
    background-color: black;
  }

  .column {
    float: left;
    width: 50%;
    /* padding-top: 5%;
    padding-left: 6%;
    padding-right: 6%; */
    height: 560px; /* Should be removed. Only for demonstration */
    color: white;
    margin-top: 5%;
  }

  .row:after {
    content: "";
    display: table;
    clear: both;
  }

  .column img {
    width: 50%;
    height: 50%;
    border-radius: 100%;
  }

  .column img:hover {
    box-shadow: 0px 0px 50px 30px cyan; 
    border-style: solid;
    border-color: black;
    border-width: 5px;
    transition: all 0.5s;
  }

  .text {
    color: white;
    font-size: 30px;
    margin-top: 9%;
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
      <li><a href="button.php" class="active">Home</a></li>
      <li><a href="about_us.php">About us</a></li>
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

  <div class="row">
    <div class="column">
        <center><a href="get_rank.php"><img src="predictore.png" style="border-radius: 100%;"></a></center>
        <center><div class="text">Predict your college on the basis of your rank</div></center>
    </div>
    <div class="column">
        <center><a href="create.php"><img src="compare-1.jpg" style="border-radius: 100%;"></a></center>
        <center><div class="text">Compare colleges</div></center>
    </div>
  </div>
  <div class="row">
    <div class="column">
        <center><a href="scoler.html"><img src="scholarship.jpg" style="border-radius: 100%;"></a></center>
        <center><div class="text">Want to know which scholarship is applicable for you</div></center>
    </div>
    <div class="column">
        <center><a href="college_list.php"><img src="collage.jpg" style="border-radius: 100%;"></a></center>
        <center><div class="text">All the information of colleges</div></center>
    </div>
  </div>
     
</body>
</html> 
