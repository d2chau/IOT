<!DOCTYPE html>   
<html lang="en">   
<head>   
<meta charset="utf-8">   
<title>Twitter Bootstrap Modals Example</title>   
<meta name="description" content="Creating Modal Window with Twitter Bootstrap">  
<link href="bootstrap/app/www/css/bootstrap.css" rel="stylesheet">   
<link href="bootstrap/app/www/css/modal-custom.css" rel="stylesheet">
</head>  
<body>  
<div class="container">  
<h2>Example of creating Modals with Twitter Bootstrap</h2>  
<div id="example" class="modal hide fade in" style="display: none; ">  
<div class="modal-header">  
<a class="close" data-dismiss="modal">×</a>  
<h3>item name (title)</h3>  
</div>  
<div class="modal-body">  
	<div class="image_div">
		<img src="small_banana.jpg">
	</div>

	<div class="right_outer">
		<div class="right_outer_top">
			<form class="qty_form">
				Qty:
				<input type="text" class="small_box">
				<input type="button" value="+" class="op">
				<input type="button" value="-" class="op">
			</form>
		</div>

		<div class="right_outer_middle">
			category
		</div>
		<br><br>
		<div class="right_outer_bottom">
			<form class="available_form">
				Available: 
				<input type="text" class="small_box">
			</form>
		</div>
	</div>
</div>  
<div class="modal-footer">  
<a href="#" class="btn btn-success">Add</a>  
<a href="#" class="btn" data-dismiss="modal">Close</a>  
</div>  
</div>  
<p><a data-toggle="modal" href="#example" class="btn btn-primary btn-large">Launch demo modal</a></p>  
</div>  
<script src="bootstrap/app/www/js/jquery.js"></script>  
<script src="bootstrap/app/www/js/bootstrap-modal.js"></script>  
</body>  
</html>  

