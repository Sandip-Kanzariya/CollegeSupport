<?php
   session_start();
   $res1 = false;
   $error = false;
   
   if(isset($_POST['username']))
   {
      $_SESSION['username'] = $_POST['username'];
      $servername = "localhost";
      $user = "root";
      $password = "";
      $database = "users";
     // $res1 = false;
      $conn = mysqli_connect($servername, $user, $password, $database);
      if(!$conn)
      {
          die("connection failded ".mysqli_connect_error());
      }
      $username = $_POST['username'];
      $password = $_POST['password'];
      $sql = "SELECT username ,"."password FROM information;";
      $res = mysqli_query($conn,$sql);
      if(mysqli_num_rows($res) > 0)
      {
          while($row = mysqli_fetch_assoc($res)){
            if($row['username'] == $username && $row['password'] == $password){
              $res1 = true;
            }
          }
      }
      else
      {
           echo "fail";
      }
      if($res1 == false){
        $error = true;
      }
      /*if($cpassword == $password)
      {
        $sql = "INSERT INTO `information` (`username`, `password`) VALUES('$username', $password)";
        $res = mysqli_query($conn,$sql);
        if($res)
        {
          $res1 = true;
        }
      }
      else{
        $error = true;
      }*/
      
      
      
    }
 
?>

<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link rel="icon" type="image/x-icon" href="logo.png">
  <style>

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
    margin-left: 350px;
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


    .login_table {
      background-color: black;
      margin-top: 10%;
      margin-left: 30%;
      margin-right: 30%;
      width: 40%;
      border-radius: 20px;
      border-style: solid;
      border-color: white;
      border-width: 7px;
    }

    input[type=text] {
      width: 62%;
      padding-top: 2%;
      padding-bottom: 2%;
      margin-top: 5%;
      margin-bottom: 5%;
      /* margin-left: 26%;
      margin-right: 26%; */
      /* display: inline-block; */
      border: 4px solid white;
      border-radius: 7px;
      box-sizing: border-box;
      background-color: black;
      color: white;
    }

    input[type=password] {
      width: 62%;
      padding-top: 2%;
      padding-bottom: 2%;
      margin-top: 2%;
      margin-bottom: 5%;
      /* margin-left: 26%;
      margin-right: 26%; */
      /* display: inline-block; */
      border: 4px solid white;
      border-radius: 7px;
      box-sizing: border-box;
      background-color: black;
      color: cyan;
    }

    button[type=submit]{
      border-style: solid;
      border-radius: 7px;
      border-color: white;
      background-color: black;
      color: white;
      padding: 2% 5%;
      margin-top: 2%;
      margin-bottom: 2%;
      font-weight: bold;
      border-width: 3px;
    }

    button[type=submit]:hover {
      background-color: white;
      color: black;
      font-weight: bold;
    }
    
    body {
      background-image: url("background.gif");
    }

    .signup {
      color: white;
      margin-top: 2%;
      margin-bottom: 3%;
      font-size: 20px;
      font-family: Arial, Helvetica, sans-serif;
    }

    .heading {
      color: white;
      margin-top: 4%;
      margin-bottom: 0;
      font-size: 30px;
      font-weight: 700;
      font-family: Arial, Helvetica, sans-serif;
    }
    .active{
      background-color:cyan;
      color:black;
    }
  </style>
  </head>
  <body>
    <?php
      if($res1){
        header("Location: button.php");
      }
      if($error){
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        
        <p style="border:5px solid white;border-radius:30px;color:red;background-color:black;font-family:courier;font-size:30px;text-align:center;padding:10px;text-shadow:3px 3px 4px;">something went wrong. please try again</p>
        </div>';
      }
    ?>
    <br>
    <nav>
      <a href="#">
        <img src="logo.png" style="width: 65px; height: 65px; border-radius:100%;">
      </a>
      <a style="color:white;font-size: 40px; font-weight: 500; margin-left: 25px;font-family: Arial, Helvetica, sans-serif;">College Support</a>
      <ul> 
        <li><a href="index.php">Home</a></li>
        <li><a href="login.php" class="active">Login</a></li>
        <li><a href="signup.php">Sign up</a></li>
        <li><a href="about_us-0.html">About us</a></li>
      <li><a href="contact-0.html">Contact us</a></li>
      </ul>
    </nav>

    <center>
    <div class="login_table">
      <form method="post">
        <div class="heading"><center>Login</center></div>
        <label for="username" id="username"></label>
        <input type="text" id="username"  name="username" placeholder="Username">

        <label for="password" id="password"></label>
        <input type="password" id="password" name="password" placeholder="Password">

        <center><button type="submit">Login</button></center>
        <div class="signup"><center>Have not an account? <a href="signup.php" style="color:cyan">Sign up </a>here</center></div>
      </form>
    </div>
    </center>

  </body>
</html>