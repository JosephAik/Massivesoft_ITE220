<!DOCTYPE html>
<html>
	<head>
		<title>Cart	|	Massivesoft</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	</head>
	<body style="background-color: #f9f9f9; font-family: 'Source Sans Pro', sans-serif;">
		<?php 
		error_reporting(E_ALL & ~E_NOTICE);
		include 'productsList.php'; 
		$cartProdID = $_GET['prodID'];
		$cartProdAmount = $_GET['prodAmount'];
		$cartTotals = $product[$cartProdID][5]*$cartProdAmount;
		if ($cartProdID == null ) {
			echo "<div class='alert alert-danger' role='alert'><font size='7'><i class='fa fa-exclamation-triangle' aria-hidden='true'></i></font><p>Nothing here (no data was attached)</p></div>";
		}
		if ($cartProdAmount <= 0)  {
			echo "<div class='alert alert-danger' role='alert'><font size='7'><i class='fa fa-exclamation-triangle' aria-hidden='true'></i></font><p>Invalid input (Malformed Amount, negative or zero value given.)</p></div>";
		}
		else{
		echo 	"<div class='alert alert-success' role='alert'><font size='7'><i class='fa fa-shopping-cart' aria-hidden='true'></i></font><p>".$cartProdAmount."x ".$product[$cartProdID][0]." was added to the cart</p><p>Total: $".$cartTotals."</p></div>";}
		?>
		<a href='javascript:history.go(-1)'><---Back</a>
	</body>
</html>