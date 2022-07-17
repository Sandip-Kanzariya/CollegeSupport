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
  echo "table, th, td { border:2px solid black; }";
  echo "tr:nth-child(even) {
    background-color: #D6EEEE;
  }";
  echo "tr:hover {background-color:#228999;}";
  echo "th:hover {background-color:#228999;}";
  echo "</style>";
  echo "</head>";
  if(mysqli_num_rows($res) > 0)
  {
    echo "<table>";
    echo "<tr>";
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
            echo "<tr>";
            
            echo "<td>".$row['Rank_of_college']."</td>";
            echo "<td>".$row['Name_of_the_college']."</td>";
            echo "<td>".$branch."</td>";
            echo "<td>".$row["$cast"]."</td>";
            echo "<td>".$row['Address']."</td>";
            echo "<td>".$row['Fees']."</td>";
            echo "<td>".$row['Average_placement_of_2021']."</td>";
            
             /*echo "<form action='Delete.php' method='POST'>";
            echo "<input type = 'hidden' name = 'id' value = '$row[$col3]'>";
            echo "<input type='submit' value='Delete'>";
            echo "</form>";
            echo "  ";
            echo "<form action='Update.php' method='POST'>";
            echo "<input type = 'hidden' name = 'id' value = '$row[$col3]'>";
            echo "<input type='submit' value='Update'>";
            echo "</form>";*/
            echo "</tr>";
        }
    }
  }
  else
  {
    echo "fail";
  }
?>