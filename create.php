<html>
<head>
<title>Compare</title>
    <link rel="icon" type="image/x-icon" href="logo.png">
<style>

body{
  background-color:black;
  color: cyan;
}
.inline-display {
  display: inline-flex;
}

div.a {
  text-align: center;
  color: cyan;
}

div.b {
  text-align: left;
margin-right: 100px;
color: cyan;
}

div.c {
  text-align: right;
margin-left: 266px;
color: cyan;
} 

div.d {
  text-align: justify;
color: cyan;
} 

</style>
</head>
<body>



<div class="inline-display">
<div class="b">
<h2>Collage - 1</h2>

<p style="font-size: 20px;font-weight:200;">Please enter collage name that you want to compare with other.</p>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get">
<select name="id">
        <option selected="selected">-- select college name --</option>
        <?php
        require_once "config.php";

	  $sql = "SELECT * FROM college";
        $stmt = mysqli_prepare($link, $sql);     
	  mysqli_stmt_execute($stmt);
	  $result = mysqli_stmt_get_result($stmt);

        while ($row_1 = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		echo "<option value=".$row_1['Rank_of_college'].">".$row_1['Name_of_the_college']." - ".$row_1['Branch']."</option>";
        }
        ?>
</select></br></br>
<input type="submit" value="Submit" name="first">
<a href="button.php" style ="color:cyan;">Back</a>
</form>
</div>

<div class="c">
<h2>Collage - 2</h2>

<p style="font-size: 20px;font-weight:200;">Please enter collage name that you want to compare with collage - 1. </p>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get">
<select name="id">
	  <option selected="selected" >-- select college name --</option>
	  <?php
        require_once "config.php";

	  $sql = "SELECT * FROM college";
        $stmt = mysqli_prepare($link, $sql);     
	  mysqli_stmt_execute($stmt);
	  $result = mysqli_stmt_get_result($stmt);

        while ($row_1 = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		echo "<option value=".$row_1['Rank_of_college'].">".$row_1['Name_of_the_college']." - ".$row_1['Branch']."</option>";
        }
        ?>
</select></br></br>
<a href="button.php" style ="color:cyan;">Back</a>
<input type="submit" value="Submit" name="second">
</form>
</div>
</div>
<!-- <br><br> -->
</body>
</html>

<?php
$formname = "";
if (isset($_GET['id']) && trim($_GET['id']) != "") {

  if (isset($_GET['second']) && !file_exists('temp_1.txt')){
	echo "Please select college-1 then select second college !!";
  } else {
	require_once "config.php";

	$sql = "SELECT * FROM college WHERE Rank_of_college = ?";
      $stmt = mysqli_prepare($link, $sql);        
	// Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "i", $param_id);

      // Set parameters
      $param_id = trim($_GET['id']);

      // Attempt to execute the prepared statement
      if (mysqli_stmt_execute($stmt)) {
      	$result = mysqli_stmt_get_result($stmt);

            if (mysqli_num_rows($result) == 1) {
                /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                $row_1;
			$row_2;				
			if (isset($_GET['first'])){
				$formname = "first";
				$row_1 = mysqli_fetch_array($result, MYSQLI_ASSOC);
				file_put_contents('temp_1.txt', json_encode($row_1, true));
			} else {
				$formname = "second";
				$row_2 = mysqli_fetch_array($result, MYSQLI_ASSOC);
				file_put_contents('temp_2.txt', json_encode($row_2, true));
			}			
            }

        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }

    // Close statement
    mysqli_stmt_close($stmt);

    // Close connection
    mysqli_close($link);
  }
}
?>

<html>
<head>
<style>
.inline-display {
  display: inline-flex;
}
.b2 {
  text-align: left;
  margin-right: 715px;
}

.c2 {
  text-align: right;
  margin-left: 300px;
} 
table, th, td {
  border: 1px solid cyan;
  border-collapse: collapse;
}
.bold {
  font-weight: bold;
}

</style>
</head>
<body>

<?php if (file_exists('temp_1.txt')) { ?>
<?php $temp_1 = json_decode(file_get_contents('temp_1.txt', true), true);  if (!empty($temp_1)) { ?>

<div style="float:left">
<table style="width:100%">
  <tr>
    <th style="width:15%">Section</th>
    <th style="width:35%">About</th>
    <th style="width:50%">College - 1</th>
  </tr>
  <tr>
    <th style="padding: 5x;" rowspan="7">College Details</th>
    <td class="bold">Rank</td>
    <td>
	<?php if (!empty($temp_1["Rank_of_college"])) { echo $temp_1["Rank_of_college"]; } ?>
    </td>
  </tr>
  <tr>
    <td class="bold" style="height:40px">Name</td>
    <td style="height:40px">
	<?php if (!empty($temp_1["Name_of_the_college"])) { echo $temp_1["Name_of_the_college"]; } ?>
    </td>
  </tr>
  <tr>
    <td class="bold">Branch</td>
    <td>
      <?php if (!empty($temp_1["Branch"])) { echo $temp_1["Branch"]; } ?>
    </td>
  </tr>
  <tr>
    <td class="bold" style="height:40px">Address</td>
    <td style="height:40px">
      <?php if (!empty($temp_1["Address"])) { echo $temp_1["Address"]; } ?>
    </td>
  </tr>
  <tr>
    <td class="bold">Fees</td>
    <td>
	<?php if (!empty($temp_1["Fees"])) { echo $temp_1["Fees"]; } ?> 
    </td>
  </tr>
  <tr>
    <td class="bold">Area of Campus</td>
    <td>
	<?php if (!empty($temp_1["Campus_area(acres)"])) { echo $temp_1["Campus_area(acres)"]; } ?> 
    </td>
  </tr>
  <tr>
    <td class="bold">Average Placement of 2021</td>
    <td>
	<?php if (!empty($temp_1["Average_placement_of_2021"])) { echo $temp_1["Average_placement_of_2021"]; } ?> 
    </td>
  </tr>
  <tr>
    <th rowspan="5">Cutoff</th>
    <td class="bold">General</td>
    <td>
	<?php if (!empty($temp_1["Cutoff_Gen"])) { echo $temp_1["Cutoff_Gen"]; } ?> 
    </td>
  </tr>
  <tr>
    <td class="bold">EWS</td>
    <td>
	<?php if (!empty($temp_1["Cutoff_EWS"])) { echo $temp_1["Cutoff_EWS"]; } ?> 
    </td>
  </tr>
  <tr>
    <td class="bold">OBC</td>
    <td>
	<?php if (!empty($temp_1["Cutoff_OBC"])) { echo $temp_1["Cutoff_OBC"]; } ?>
    </td>
  </tr>
  <tr>
    <td class="bold">SC</td>
    <td>
	<?php if (!empty($temp_1["Cutoff_SC"])) { echo $temp_1["Cutoff_SC"]; } ?> 
    </td>
  </tr>
  <tr>
    <td class="bold">ST</td>
    <td>
	<?php if (!empty($temp_1["Cutoff_ST"])) { echo $temp_1["Cutoff_ST"]; } ?> 
    </td>
  </tr>
</table>
</div>
<?php } ?>
<?php } ?>

<?php if (file_exists('temp_2.txt')) { ?>
<?php $temp_2 = json_decode(file_get_contents('temp_2.txt', true), true);  if (!empty($temp_2)) { ?>

<div style="float:left">
<table style="width:100%">
  <tr>
    <th style="width:50%">College - 2</th>
  </tr>
  <tr>
    <td>
	<?php if (!empty($temp_2["Rank_of_college"])) { echo $temp_2["Rank_of_college"]; } ?>
    </td>
  </tr>
  <tr>
    <td style="height:40px">
	<?php if (!empty($temp_2["Name_of_the_college"])) { echo $temp_2["Name_of_the_college"]; } ?>
    </td>
  </tr>
  <tr>
    <td>
	<?php if (!empty($temp_2["Branch"])) { echo $temp_2["Branch"]; } ?>
    </td>
  </tr>
  <tr>
    <td style="height:40px">
	<?php if (!empty($temp_2["Address"])) { echo $temp_2["Address"]; } ?>
    </td>
  </tr>
  <tr>
    <td>
	<?php if (!empty($temp_2["Fees"])) { echo $temp_2["Fees"]; } ?> 
    </td>
  </tr>
  <tr>
    <td>
	<?php if (!empty($temp_2["Campus_area(acres)"])) { echo $temp_2["Campus_area(acres)"]; } ?> 
    </td>
  </tr>
  <tr>
    <td>
	<?php if (!empty($temp_2["Average_placement_of_2021"])) { echo $temp_2["Average_placement_of_2021"]; } ?>
    </td>
  </tr>
  <tr>
    <td>
	<?php if (!empty($temp_2["Cutoff_Gen"])) { echo $temp_2["Cutoff_Gen"]; } ?>  
    </td>
  </tr>
  <tr>
    <td>
	<?php if (!empty($temp_2["Cutoff_EWS"])) { echo $temp_2["Cutoff_EWS"]; } ?>
    </td>
  </tr>
  <tr>
    <td>
	<?php if (!empty($temp_2["Cutoff_OBC"])) { echo $temp_2["Cutoff_OBC"]; } ?>
    </td>
  </tr>
  <tr>
    <td>
	<?php if (!empty($temp_2["Cutoff_SC"])) { echo $temp_2["Cutoff_SC"]; } ?>
    </td>
  </tr>
  <tr>
    <td>
	<?php if (!empty($temp_2["Cutoff_ST"])) { echo $temp_2["Cutoff_ST"]; } ?>
    </td>
  </tr>
</table>
</div>
<br><br>

<?php if (file_exists('temp_1.txt') && file_exists('temp_2.txt')) { unlink('temp_1.txt'); unlink('temp_2.txt'); } ?>
<?php } ?>
<?php } ?>

</body>
</html>



