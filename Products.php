<!DOCTYPE html>
<html>
<head>
	<title>Shop Online</title>
	<link rel="stylesheet" type="text/css" href="Mainpage.css">
	<link rel="stylesheet" type="text/css" href="libs/css/bootstrap.min.css">
	<link rel="shortcut icon" src="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<h1 style="text-align:center;padding:10px;" class="heading">Shop Now</h1>

<div class="row category">
    <div class="col-sm-3"><button class="btn btn-danger">All</button></div>
    <div class="col-sm-3"><button class="btn btn-danger">Key Instruments</button></div>
    <div class="col-sm-3"><button class="btn btn-danger">Drums</button></div>
     <div class="col-sm-3"><button class="btn btn-danger">String</button></div>
  </div>
</div>
<div class="container-fluid tab">
	<?php
$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "music_ins";

// Create connection
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "connected";
//$response = array("msg"=>"invalid request","code"=>"INV_RQT");
	
	$sql="SELECT * from add_product ";
	$result = $conn->query($sql);
	if($result->num_rows>0){
		while($row = $result->fetch_assoc()){
			//echo "<br>".$row["ins_id"].$row["ins_name"].$row["ins_brand"].$row["ins_cat"].$row["price"].$row["descp"]."<br>";
			echo "<table class=\"table\">";
			echo "<tbody>";
			echo "<div class=\"row\">";
			echo "<div class=\"col-sm-4\">";
			echo "<tr>";
			echo "<th scope=\"row\"><h3>".$row["ins_name"]."</h3></th>";
			echo "</tr>";
			echo "<tr>";
			echo "<th scope=\"row\">".$row["ins_brand"]."</th>";
			echo "</tr>";
			echo "<tr>";
			echo "<th scope=\"row\">".$row["ins_cat"]."</th>";
			echo "</tr>";
			echo "<tr>";
			echo "<th scope=\"row\">".$row["price"]."</th>";
			echo "</tr>";
			echo "<tr>";
			echo "<th><button class=\"btn btn-info btn-lg\">Purchase</button></th>";
			echo "</tr>";
		    echo "</div>";
			echo "</div>";
		echo "</tbody>";
		echo "</table>";
	}
}
	else{
		echo "0 result";
	}


//echo json_encode($response);
?>
</div>
</body>
<style>
body{
	background-color:#DDDEDE;
	text-align: center;
}
.tab{
	padding:50px;
	width:30%;
	float: left !important;
}
.table{
	background-color:white;
	border:solid 2px black;
	text-align:center !important;
	float:left;
}

h3{
	color:gold;
}
.part{
	padding:5px;
	float: 
}
.row{
text-align:center !important;
}
.category{
	text-align: center;
	background-color:#DDDEDE;
}
.col-sm-3:hover{
background-color:#F0F1F1;
}




</style>
</html>