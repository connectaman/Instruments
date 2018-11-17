<!DOCTYPE html>
<html>
<head>
	<title>Display product</title>
	<link rel="stylesheet" type="text/css" href="Mainpage.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="shortcut icon" src="">
</head>
<body>
<div class="container-fluid">
  <h1 style="color:white">Admin Panel!</h1>
  <div class="row">
	<div class="col-sm-3"><a href="Addproduct.html"><div class="options"><h3>Add Product</h3></div></a></div>
    <div class="col-sm-3"><a href="display.php"><div class="options"><h3>Display Product</h3></div></a></div>
    <div class="col-sm-3"><div class="options"><h3>View Order</h3></div></div>
  </div>
  <div class="row">
    <div class="col-sm-3"><div class="options"><h3> View Sales</h3></div></div>
    <div class="col-sm-3"><div class="options"><h3>View shipping</h3></div></div>
    <div class="col-sm-3"><div class="options"><h3>Database</h3></div></div>
  </div>
</div>


</body>
<style>
body{
padding:20px;	
background-color:black;
}
.col-sm-3{
	margin:50px;
	padding:2px;
	text-align:center;
	background-color:lavender;
}
.col-sm-3:hover{
background-color:#636767;
box-shadow: 6px 7px 23px 0px rgba(255,255,255,1);
color:white;	

}
.options{
position: absolute;
    top: 80px;
    right: 0;
    width: 350px;
    height: 100px;
}
.row{
	height:300px;
}
</style>
</html>