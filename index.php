<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://kit.fontawesome.com/14d0735fbc.js" crossorigin="anonymous"></script>
  <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
  <title>Home</title>
  <link rel="icon" type="image/x-icon" href="logo.png">
<style>
  
html {
    scroll-behavior: smooth;
}


nav{
    height: 70px;
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
    margin-left: 300px;
    margin-right: 0px;
}

nav ul li {
    margin: 0 15px;
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

body {
    background-image: url('https://www.thebalancecareers.com/thmb/hOSTPGdYulshro7AqttFK2wlT_Q=/3864x2173/smart/filters:no_upscale()/school-books-on-desk--education-concept-871454068-5b548900c9e77c005b04fc8c.jpg');
    background-repeat: no-repeat;
    background-size: cover;
}

.overview {
  border-color: transparent;
  border-radius: 20px;
  margin-right: 800px;
  margin-left:70px;
  margin-top: 100px;
  color: white;
  font-size: 20px;
  border-style: solid;
  font-family: Arial, Helvetica, sans-serif;
  background-color: transperent;
  transition: transform .2s;
}

.overview:hover {
  transform: scale(1.2); 
  background-color: cyan;
  color: black;
  transition: all .3s ease;
}

.overview p {
  font-family: Arial, Helvetica, sans-serif;
  text-align: left;
  margin-left: 37px;
  margin-right: 27px;
  line-height: 1.3;
}

.overview h2{
  font-size: 35px;
}

.footer {
  font-size: 25px;
  font-weight: 700;
  color: white;
  font-family: Arial, Helvetica, sans-serif;
  margin-top: 350px;
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
    <img src="logo.png" style="width: 65px; height: 65px; border-radius:100%;">
    </a>
    <a style="color:white;font-size: 40px; font-weight: 500; margin-left: 25px;font-family: Arial, Helvetica, sans-serif;">College Support</a>

    <ul> 
      <li><a href="#" class="active">Home</a></li>
      <li><a href="login.php">Login</a></li>
      <li><a href="signup.php">Sign up</a></li>
      <li><a href="about_us-0.html">About us</a></li>
      <li><a href="contact-0.html">Contact us</a></li>
    </ul>
    
  </nav>

  <div class="overview">
    <center><h2>Welcome!!</h2></center>
      <p>Here you can get information about colleges and scholarship and predict the college and compare colleges.</p>
  </div>
  
  <div class="footer">
    <center><p><i class="fa-solid fa-copyright  "> </i>2022 College Support</p></center>
  </div>

</body>
</html> 

