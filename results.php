<?php
  $rank = $_POST['rank'];
  $cast = $_POST['cast'];
  $branch = $_POST['branch'];

  $servername = 'localhost';
  $username = "root";
  $password = "";
  $database = "users";
  $conn = mysqli_connect($servername, $username, $password, $database);
  if(!$conn)
  {
      die("connection failded ".mysqli_connect_error());
  }
  //$sql = "select ".$col1.",".$col2.",".$col3." FROM ".$table;
  $sql = "SELECT Rank_of_college, Name_of_the_college,Branch, ".$cast.",Address, Fees, Average_placement_of_2021 FROM college";
 
  $res = mysqli_query($conn, $sql);
  echo "<head>";
  echo "<style>";
  echo "body{background-color:black}";
  echo "table, th, td { border:2px solid cyan; }";
  echo "th,td {text-align:center; color:white;}";
  echo "th {
    background-color: red;

  }";
  echo "tr:hover {background-color:DarkCyan;}";
 
  
  echo "</style>";
  echo "</head>";
  if(mysqli_num_rows($res) > 0)
  {
    echo "<table style='width:100%;'>";
    echo "<tr style='height:100px;'>";
    echo "<th>"."Rank_of_college"."</th>";
    echo "<th>"."Name_of_college"."</th>";
    echo "<th>"."Branch"."</th>";
    echo "<th>".$cast."</th>";
    echo "<th>"."Address"."</th>";
    echo "<th>"."Fees"."</th>";
    echo "<th>"."Average_placement_of_2021"."</th>";
    echo "</tr>";
    while($row = mysqli_fetch_assoc($res))
    {
        
        if($row['Branch'] == $branch && $row["$cast"] >= $rank)
        {
            echo "<tr style='height:100px;'>";
            
            echo "<td>".$row['Rank_of_college']."</td>";
            echo "<td>".$row['Name_of_the_college']."</td>";
            echo "<td>".$branch."</td>";
            echo "<td>".$row["$cast"]."</td>";
            echo "<td>".$row['Address']."</td>";
            echo "<td>".$row['Fees']."</td>";
            echo "<td>".$row['Average_placement_of_2021']."</td>";
            echo "</tr>";
        }
    }
  }
  else
  {
    echo "fail";
  }
?>