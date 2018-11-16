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

$response = array("msg"=>"invalid request","code"=>"INV_RQT");

if(isset($_POST["add_product"])){
	$insid=$_POST["insid"];
	$insname=$_POST["insname"];
	$insbrand=$_POST["insbrand"];
	$inscat=$_POST["inscat"];
	$insprice=$_POST["insprice"];
	$insdes=$_POST["insdes"];
	$sql="INSERT INTO add_product VALUES ('$insid','$insname','$insbrand','$inscat','$insprice','$insdes')";
	if(mysqli_query($conn,$sql)){
		$response["msg"]="inserted successfuly";
		$response["code"]="ADD_PRODUCT_SUC";
	}
	else{
		$response["msg"]="Unable to insert into database";
		$response["code"]="ADD_PRODUCT_ERR";
		$response["err"]=mysqli_error($conn);
	}
}

echo json_encode($response);
?>