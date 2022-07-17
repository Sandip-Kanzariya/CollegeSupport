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
  echo "table, th, td { border:1px solid aqua; }";
  echo "th { border:1px solid aqua; }";
  echo "tr {
    background-color:black;
    color: aqua;
  }";
  echo "th {
    background-color:red;
    color: white;
  }";
  echo "tr:hover {background-color:DarkCyan;}";
  echo "</style>";
  echo "</head>";
  
  if(mysqli_num_rows($res) > 0)
  {
    echo "<table>";
    echo "<tr style='height:100px;'>";
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
        
            echo "<tr style='height:100px;'>";
            
            echo "<td style='text-align:center;margin-top:20px;'>".$row['Rank_of_college']."</td>";
            echo "<td style='text-align:center;'>".$row['Name_of_the_college']."</td>";
            echo "<td style='text-align:center;'>".$row['Branch']."</td>";
            echo "<td style='text-align:center;'>".$row["Cutoff_Gen"]."</td>";
            echo "<td style='text-align:center;'>".$row["Cutoff_EWS"]."</td>";
            echo "<td style='text-align:center;'>".$row["Cutoff_OBC"]."</td>";
            echo "<td style='text-align:center;'>".$row["Cutoff_SC"]."</td>";
            echo "<td style='text-align:center;'>".$row["Cutoff_ST"]."</td>";
            echo "<td style='text-align:center;'>".$row['Address']."</td>";
            echo "<td style='text-align:center;'>".$row['Fees']."</td>";
            echo "<td style='text-align:center;'>".$row['Average_placement_of_2021']."</td>";
            echo "</tr>";
        
    }
  }
  else
  {
    echo "fail";
  }
?>