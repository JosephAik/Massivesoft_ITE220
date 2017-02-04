<!DOCTYPE html>
<html>
	<head>
		<title>Online Shop	|	Massivesoft</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	</head>
	<body style="background-color: #f9f9f9; font-family: 'Source Sans Pro', sans-serif;">
		<div class="container">
			<div class="col-14"><img src="/Massivesoft/content/img/Massivesoft_logo_b.png" class="img-fluid" alt="Massivesoft_Logo"></div><br>
			<ul class="nav nav-pills nav-fill nav-justified">
  				<li class="nav-item"><a class="nav-link" href="index.php">Home</a>
  				<li class="nav-item"><a class="nav-link" href="aboutus.php">About Us</a></li>
  				</li><li class="nav-item"><a class="nav-link" href="products.php">Products</a></li>
  				<li class="nav-item"><a class="nav-link active" href="#">Shop</a></li>
			</ul><hr>
		</div>
<?php  
	include 'productsList.php';
	$customerNAME = $_COOKIE['userlogin'];
	$customerCART = "0";
echo "	<div class='container-fluid jumbotron'>
			<div class='well well-sm'>
				<h1 style='text-align:left;float:left;'>Online Store</h1>
				<h3 style='float:right;'>Hello ".$customerNAME." !</h3>
				<br><br>
				<p style='text-align:right;'><i class='fa fa-shopping-cart' aria-hidden='true'></i> item(s): <a href='cart.php'>".$customerCART."</a></p>
			</div>
			<div class='card-group'>";
				for ($i=0 ; $i < sizeof($product); $i++) 
          		{ 
echo " 			<div class='col center-block'>    
              		<div class='card' style='width: 21rem;'>
                		<div class='card-header'><span class='badge badge-pill badge-default'>".$product[$i][1]."</span></div>
                  		<img class='card-img-top img-fluid' src='".$product[$i][3]."' alt='".$product[$i][2]."'>
                  		<div class='card-block'>
                   			<h3 class='card-title'>".$product[$i][0]."</h3>
                   			<p class='card-text'>".$product[$i][4]."</p>
                   			<h3 style='text-align: right;''><span class='badge badge-pill badge-default'>$".$product[$i][5]."</span></h3>
                  		</div>
							<div class='card-footer'>
								<form class='form-inline' action='cart.php' method='GET'>
                        			<div class='form-group-sm col'>
                          				<label class='sr-only' for='exampleInputAmount'>Amount</label>
                          				<div class='input-group'>
											<div for='Quantity' class='input-group-addon'>Quantity</div>
                             				<input name='prodAmount' value='1' type='number' class='form-control' id='Amount' placeholder='1'>
                              				<span class='input-group-btn'><button name='prodID' value='".$i."' type='submit' class='btn btn-success' data-toggle='tooltip' data-placement='top' title='Add to cart'><i class='fa fa-shopping-cart' aria-hidden='true'></i></button></span>
                          				</div>
                        			</div>
                    			</form>
                    		</div>
                	</div><br>
              	</div>";
          			};
echo "        
            </div>";?>
        </div>
	<?php include 'footer.php';?>
	</body>
</html>