<?php
  
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
  $sql = "SELECT Rank_of_college, Name_of_the_college,Branch,Cutoff_Gen,Cutoff_EWS,Cutoff_OBC,Cutoff_SC,Cutoff_ST,"."Address, Fees, Average_placement_of_2021 FROM college";
 
  $res = mysqli_query($conn, $sql);
  echo "<head>";
  echo "<style>";
  echo "table, th, td { border:2px solid black; }";
  echo "tr:nth-child(even) {
    background-color:aqua;
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
    echo "<th>"."Cutoff_Gen"."</th>";
    echo "<th>"."Cutoff_EWS"."</th>";
    echo "<th>"."Cutoff_OBC"."</th>";
    echo "<th>"."Cutoff_SC"."</th>";
    echo "<th>"."Cutoff_ST"."</th>";
    echo "<th>"."Address"."</th>";
    echo "<th>"."Fees"."</th>";
    echo "<th>"."Average_placement_of_2021"."</th>";
    echo "</tr>";
    while($row = mysqli_fetch_assoc($res))
    {
        
            echo "<tr>";
            
            echo "<td>".$row['Rank_of_college']."</td>";
            echo "<td>".$row['Name_of_the_college']."</td>";
            echo "<td>".$row['Branch']."</td>";
            echo "<td>".$row["Cutoff_Gen"]."</td>";
            echo "<td>".$row["Cutoff_EWS"]."</td>";
            echo "<td>".$row["Cutoff_OBC"]."</td>";
            echo "<td>".$row["Cutoff_SC"]."</td>";
            echo "<td>".$row["Cutoff_ST"]."</td>";
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
  else
  {
    echo "fail";
  }
?>