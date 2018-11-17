<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
	<link rel="stylesheet" type="text/css" href="Mainpage.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
	<div class="Thumbnail">
		<div class="jumbotron">
	 		 <h1 class="login1">Generate Bill</h1>
 		</div>
	</div>
 <form action="#" method="POST" id="AddProductForm">
 <input type="hidden" name="add_product" value="true" />
 	<div class="falign">
   <div class="form-group">
    <label for="instru_id">Name</label>
    <input type="text" name="insid" class="form-control" id="instru_id" aria-describedby="Instrument Id" placeholder="Enter Your Name" required>
   </div>
  <div class="form-group">
    <label for="instru_name">Phone Number</label>
    <input type="text" name="insname" class="form-control" id="instru_name" aria-describedby="Instrument Name" placeholder="Enter your Contact Number" required>
  </div>
  <div class="form-group">
    <label for="instru_brand">Shipping Address</label>
    <input type="text" name="insbrand" class="form-control" id="instru_brand" aria-describedby="Instrument brand" placeholder="Enter Door Number" required>
	<input type="text" name="insbrand" class="form-control" id="instru_brand" aria-describedby="Instrument brand" placeholder="Enter Street" required>
	<input type="text" name="insbrand" class="form-control" id="instru_brand" aria-describedby="Instrument brand" placeholder="Enter Locality" required>
	<input type="text" name="insbrand" class="form-control" id="instru_brand" aria-describedby="Instrument brand" placeholder="Enter City" required>
	<input type="text" name="insbrand" class="form-control" id="instru_brand" aria-describedby="Instrument brand" placeholder="Enter State" required>
  </div> 
  
  <div class="form-group">
    <label for="instru_category">Instrument Category</label>
    <input type="text" name="inscat" class="form-control" id="instru_category" placeholder="Category" required>
  </div>
  <div class="form-group">
    <label for="price">Price</label>
    <input type="number" name="insprice" class="form-control" id="price" placeholder="Price In Rupees" required>
  </div>
  <div class="fbalign">
  <button type="submit" class="btn btn-primary btn-lg subbut">Order</button>
  
  </div>
</div>
 </form>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
	$("#AddProductForm").submit(function(){
		var formdata=$("#AddProductForm").serialize();
		$.ajax({
			url:"verify.php",
			type:"POST",
			data:formdata,
			success:function(response){
				console.log(response);
				try{
					var resp=JSON.parse(response);
					if(resp.code=="ADD_PRODUCT_SUC"){
						alert("Product Added successfuly");
					}
					else{
						alert(resp.msg);
					}
				}catch(err){
					alert(err);
				}
			},
			error:function(response){
				alert("please check your internet connection and try again");
			}
		});
		return false;
	});
});
</script>
</body>
</html>