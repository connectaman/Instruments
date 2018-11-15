<!DOCTYPE html>
<html>
<head>
	<title>Addproduct</title>
	<link rel="stylesheet" type="text/css" href="Mainpage.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
  <?php

   /* Connecting to Database */
$db_host = "localhost";
$db_username = "root";
$db_password = "root";
$db_name = "music_ins";
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
  mysqli_query($success,"INSERT INTO `add_product`(`ins_id`, `ins_name`, `ins_brand`, `ins_cat`, `price`, `descp`) VALUES ('','$naame','$brandd','$catt','$pricee','$dess');");

    //echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
  ?>
	<div class="Thumbnail">
		<div class="jumbotron">
	 		 <h1 class="login1">Add Product</h1>
 		</div>
	</div>
 <form action="Addproduct.php" method="POST">
 	<div class="falign">
   <div class="form-group">
    <label for="instru_id">Instrument Id</label>
    <input type="text" name="insid" class="form-control" id="instru_id" aria-describedby="Instrument Id" placeholder="Enter Instrument Id">
   </div>
  <div class="form-group">
    <label for="instru_name">Instrument Name</label>
    <input type="text" name="insname" class="form-control" id="instru_name" aria-describedby="Instrument Name" placeholder="Enter Instrument Name">
  </div>
  <div class="form-group">
    <label for="instru_brand">Instrument Brand</label>
    <input type="text" name="insbrand" class="form-control" id="instru_brand" aria-describedby="Instrument brand" placeholder="Enter Instrument brand">
  </div> 
  
  <div class="form-group">
    <label for="instru_category">Instrument Category</label>
    <input type="text" name="inscat" class="form-control" id="instru_category" placeholder="Category">
  </div>
  <div class="form-group">
    <label for="price">Price</label>
    <input type="number" name="insprice" class="form-control" id="price" placeholder="Price In Rupees">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" name="insdes" class="form-control" id="description" placeholder="Description">
  </div>
  <div class="fbalign">
  <button type="submit" class="btn btn-primary subbut">Submit</button>
  </div>
</div>
 </form>
	

<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>