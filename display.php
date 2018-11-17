<!DOCTYPE html>
<html>
<head>
	<title>Display product</title>
	<link rel="stylesheet" type="text/css" href="Mainpage.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="shortcut icon" src="">
</head>
<body>
<h1 style="text-align:center;padding:10px;" class="heading">Product Details</h1>
<div class="contaier tab">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">BRAND</th>
      <th scope="col">CATEGORY</th>
	  <th scope="col">PRICE</th>
	  <th scope="col">DESCRIPTION</th>
    </tr>
  </thead>
  <tbody>
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
	
	$sql="SELECT * from add_product";
	$result = $conn->query($sql);
	if($result->num_rows>0){
		while($row = $result->fetch_assoc()){
			//echo "<br>".$row["ins_id"].$row["ins_name"].$row["ins_brand"].$row["ins_cat"].$row["price"].$row["descp"]."<br>";
			echo "<tr>";
			echo "<th scope=\"row\">".$row["ins_id"]."</th>";
			echo "<td>".$row["ins_name"]."</td>";
			echo "<td>".$row["ins_brand"]."</td>";
			echo "<td>".$row["ins_cat"]."</td>";
			echo "<td>".$row["price"]."</td>";
			echo "<td>".$row["descp"]."</td>";
			echo "</tr>";
		}
	}
	else{
		echo "0 result";
	}


//echo json_encode($response);
?>
  </tbody>
</table>
</div>
</body>
<style>
body{
	background-color:#51DBBC;
}
.tab{
	padding:50px;
}
table:hover{
   box-shadow: 4px 3px 22px -2px rgba(0,0,0,0.75);
}
tr:hover{
	box-shadow: 2px 0px 24px -4px rgba(250,242,250,1);;
}
.heading:hover{
	background-color:black;
	color:white;
}

</style>
</html>