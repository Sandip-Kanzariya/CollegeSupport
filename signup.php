<?php
   $res1 = false;
   $error = false;
   if(isset($_POST['username']))
   {
      $servername = "localhost";
      $user = "root";
      $password = "";
      $database = "users";
     // $res1 = false;
      $conn = mysqli_connect($servername, $user, $password, $database);
     /* if($conn)
      {
        echo "connected";
      }*/
      $username = $_POST['username'];
      $password = $_POST['password'];
      $cpassword = $_POST['cpassword'];
      if($cpassword == $password)
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
      }
      
      
    }
 
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Signup</title>
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


    .login_table {
      background-color: black;
      margin-top: 7%;
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
        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
      
        <p style="border:5px solid white;border-radius:30px;color:green;background-color:black;font-family:courier;font-size:30px;text-align:center;padding:10px;text-shadow:3px 3px 4px;">Your data has been inserted successfully.Now try to login.</p>
        </div>';
      }
      if($error){
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <p style="border:5px solid white;border-radius:30px;color:red;background-color:black;font-family:courier;font-size:30px;text-align:center;padding:10px;text-shadow:3px 3px 4px;">password do not match</p>
        </div>';
      }
      echo '<br>';
    ?>

    <nav>
      <a href="#">
        <img src="logo.png" style="width: 65px; height: 65px; border-radius:100%;">
      </a>
      <a style="color:white;font-size: 40px; font-weight: 500; margin-left: 25px;font-family: Arial, Helvetica, sans-serif;">College       Support</a>
      <ul> 
        <li><a href="index.php">Home</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="signup.php" class="active">Sign up</a></li>
        <li><a href="about_us-0.html">About us</a></li>
      <li><a href="contact-0.html">Contact us</a></li>
      </ul>
    </nav>

    <center>
    <div class="login_table">
      <form method="post">
        <div class="heading"><center>Sign Up</center></div>
        <label for="username" id="username"></label>
        <input type="text" id="username"  name="username" placeholder="Username">

        <label for="password" id="password"></label>
        <input type="password" id="password" name="password" placeholder="Password">

        <label for="cpassword" id="cpassword"></label>
        <input type="password" id="cpassword" name="cpassword" placeholder="Confirm your password">

        <center><button type="submit">Sign Up</button></center>
        <div class="signup"><center>Already have an account? <a href="login.php" style ="color:cyan">Login </a>here</center></div>
      </form>
    </div>
    </center>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>