<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
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
    margin-left: 0%;
    margin-right: 0.5%;
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
    margin-left: 105%;
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

.box {
    width: 50%;
    border-style: solid;
    /* margin-left: 30%;
    margin-right: 30%; */
    background-color: #072227;
    border-color: white;
    border-radius: 5px;
    margin-top: 5%;
    padding: 2% 2% 2% 2%;
}

.box:hover {
    box-shadow: 0px 0px 50px 13px cyan; 
    border-style: solid;
    /* border-color: black; */
    border-width: 5px;
    transition: all 0.5s;
}

.column {
    width: 50%;
    float: left;
}

.column img {
    margin-left: 0%;
    margin-right: 100%;
}

.column p {
    color: white;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 30px;
}

.row:after {
    content: "";
    display: table;
    clear: both;
}

.icon {
    border-radius: 100%;
}

.icon ul {
    display: flex;
}

.icon ul li {
    list-style: none;
    display: inline-block;
    border-radius: 20px;
    margin-left: 31%;
    margin-right: -19%;
    margin-top: 10%;
    height: 10%;
    width: 10%;
}

.icon img{
    width: 130%;
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
            <li><a href="about_us.php">About us</a></li>
            <li><a href="contact.php" class="active">Contact us</a></li>
            <li><a href="login.php">Logout</a></li>
        </ul>
        <ul>
            <div class="nav-right">
                <li><img src="profile1.png" style="width: 85px; height: 85px; border-radius:100%;"></li>
                <li><a href="#name"><?php session_start(); echo $_SESSION['username']; ?></a></li>
            </div>
        </ul>
    </nav>

    <center>
        <div class="box">
            <div class="row">
                <div class="column">
                    <img src="fenil.png" style="border-radius: 100%; width: 90%; height: 90%; border-style: solid; border-color: white;">
                </div>
                <div class="column">
                    <p>Fenil Modi</p>
                    <p>Email: <a href="mailto:mahendrafenil@gmail.com" style="color: white;">mahendrafenil@gmail.com</a></p>
                    <p>Phone: 799XYZABCD</p>
                    <div class="icon">
                        <ul>
                            <li>
                              <a  target="_blank"><img src="instagram.png"></a>
                            </li>
                            <li>
                              <a  target="_blank"><img src="linkdin.webp"></a>
                            </li>
                          </ul>
                    </div>
                </div>
            </div>
        </div>
        </center>
    
        <center>
            <div class="box">
                <div class="row">
                    <div class="column">
                        <img src="sandip.jpg" style="border-radius: 100%; width: 90%; height: 90%; border-style: solid; border-color: white;">
                    </div>
                    <div class="column">
                        <p>Kanzariya Sandip</p>
                        <p>Email: <a href="mailto:kanzariyasandip@gmail.com" style="color: white;">kanzariyasandip@gmail.com</a></p>
                        <p>Phone: 926XYZABCD</p>
                        <div class="icon">
                            <ul>
                                <li>
                                  <a href="" target="_blank"><img src="instagram.png"></a>
                                </li>
                                <li>
                                  <a href="https://www.linkedin.com/in/sandip-kanzariya-8416b523a" target="_blank"><img src="linkdin.webp"></a>
                                </li>
                              </ul>
                        </div>
                    </div>
                </div>
            </div>
        </center>
    
            <center>
                <div class="box">
                    <div class="row">
                        <div class="column">
                            <img src="soham.jpg" style="border-radius: 100%; width: 90%; height: 90%; border-style: solid; border-color: white;">
                        </div>
                        <div class="column">
                            <p>Soham Tejani</p>
                            <p>Email: <a href="mailto:sohamtejani@gmail.com" style="color: white;">sohamtejani@gmail.com</a></p>
                            <p>Phone: 840XYZABCD</p>
                            <div class="icon">
                                <ul>
                                    <li>
                                      <a href="https://www.instagram.com/soham_tejani/" target="_blank"><img src="instagram.png"></a>
                                    </li>
                                    <li>
                                      <a href="https://www.linkedin.com/mwlite/in/soham-tejani-aa3813242" target="_blank"><img src="linkdin.webp"></a>
                                    </li>
                                  </ul>
                            </div>
                        </div>
                    </div>
                </div>
                </center>
    
                <center>
                    <div class="box">
                        <div class="row">
                            <div class="column">
                                <img src="mit.jpg" style="border-radius: 100%; width: 90%; height: 90%; border-style: solid; border-color: white;">
                            </div>
                            <div class="column">
                                <p>Mit Darji</p>
                                <p>Email: <a href="mailto:mitdarji@gmail.com" style="color: white;">mitdarji@gmail.com</a></p>
                                <p>Phone: 726XYZABCD</p>
                                <div class="icon">
                                    <ul>
                                        <li>
                                          <a href="" target="_blank"><img src="instagram.png"></a>
                                        </li>
                                        <li>
                                          <a href="https://www.linkedin.com/mwlite/in/mit-darji-825965242" target="_blank"><img src="linkdin.webp"></a>
                                        </li>
                                      </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    </center>
    
    
</body>

</html>