<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Find</title>
</head>
<body>
<style>
* {
  box-sizing:border-box;
}
body {
  margin:20px;
  background-color: #fafafa;
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #98B4D4;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #98B4D4;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<div>

<style>
     body {
       background-image: url("https://mocah.org/uploads/posts/4562144-simple-simple-background-primary-colors-minimalism-geometry-abstract.png")
     }
</style>


<div>
 <form action="findPatient.php" method="POST">
  	Name of Patient:
   <input type="text" id="name" name="name" <br>
   <input type="submit" value="Submit">
  </form>
</div>


<?php
include "config.php";

if (!empty($_POST['name'])){ // Check sname is not empty
    $pFullName = $_POST['name'];
   	$sql_statement2 = "SELECT * FROM patients WHERE pFullName = '$pFullName'";
    $result = mysqli_query($db,$sql_statement2);
    while ( $row = mysqli_fetch_assoc($result))
    {
        $pID = $row["pID"];
    }
    $sql_statement3 = "SELECT * FROM assigned_room WHERE pID = $pID";
    $result_ = mysqli_query($db,$sql_statement3);
    while ( $roomrow = mysqli_fetch_assoc($result_))
    {
        $rID = $roomrow["rID"];
        echo "<p>Patient is in room with ID: $rID </p>";
    }
}
?>

</body>
</html>