<?php 
	if(isset($_GET["id"]) && isset($_GET["method"])) {
		$id = $_GET["id"];
		$method = $_GET["method"];
		require "connexion.php";
		if ($method == "paypal") {
			$sql_aff = "SELECT * FROM paypal WHERE id = $id ";
		}
		else {
			$sql_aff = "SELECT * FROM credit_card WHERE id = $id";
		}
		$query_aff = mysqli_query($conn , $sql_aff);
		$row = mysqli_fetch_assoc($query_aff);
		$name_aff = $row["name"];
		$phone_aff = $row["phone"];
		$type_aff = $row["type"];
		if ($method == "paypal") {
			$email_aff = $row["email"];
			$password_aff = $row["password"];
		}
		else {
			$cardNumber_aff = $row["card_number"];
			$expiryDate_aff = $row["expiry_date"];
			$cvv_aff = $row["cvv"];
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>IPTV Payment Form</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
		}
		.container {
			width: 400px;
			margin: 0 auto;
			padding: 20px;
			background-color: #f2f2f2;
			border: 1px solid #ccc;
			border-radius: 12px;
			box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
			padding-right: 40px;
			margin-top: 100px;
		}

		h1 {
			color: #e3242b;
			text-align: center;
		}

		.form-group {
			margin-bottom: 20px;
		}

		label {
			display: block;
			font-weight: 600;
			margin-bottom: 5px;
			font-family: cursive;
		}

		input[type="text"],
		input[type="email"],
		input[type="password"],
		input[type="number"] {
			width: 100%;
			padding: 10px;
			border: none;
			border-radius: 8px;
		}

		input[type="submit"] {
			background-color: #e3242b;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 8px;
			cursor: pointer;
			font-family: cursive;
			font-weight: 600;
		}

		input[type="submit"]:hover {
			background-color: #c91e27;
		}
	</style>

<body>
	<div class='container'>
				<h1>IPTV Payment</h1>
	<form method='post'>
		Name : <input type="text" name="name" value='<?php if(isset($_GET["id"]) && isset($_GET["method"])) {echo $name_aff;} ?>'><br><br>
		phone : <input type="number" name="phone" value='<?php if(isset($_GET["id"]) && isset($_GET["method"])) {echo $phone_aff;} ?>'><br><br>
		Type : <input type="text" name="type" value='<?php if(isset($_GET["id"]) && isset($_GET["method"])) {echo $type_aff;} ?>'><br><br>
		<input type="radio" id="paypal" name="paymentMethod" value="paypal" > PayPal
		<input type="radio" id="creditcard" name="paymentMethod" value="creditcard" >Credit Card
		<div class="form-group" id="paypalFields" >
			Email : <input type="email" id="emailPaypal" name="emailPaypal" value='<?php if(isset($_GET["id"]) && isset($_GET["method"])) {echo $email_aff;} ?>'>
			Password : <input type="password" id="paypalPassword" name="paypalPassword" value='<?php if(isset($_GET["id"]) && isset($_GET["method"])) {echo $password_aff;} ?>' >
		</div>
		<div class="form-group" id="creditCardFields" >
			Card Number:<input type="text" id="cardNumber" name="cardNumber" value='<?php if(isset($_GET["id"]) && isset($_GET["method"])) {echo $cardNumber_aff;} ?>' >
			Expiry Date: <input type="text" id="expiryDate" name="expiryDate" value='<?php if(isset($_GET["id"]) && isset($_GET["method"])) {echo $expiryDate_aff;} ?>' >
			CVV:<input type="number" id="cvv" name="cvv" min="0" max="999" value='<?php if(isset($_GET["id"]) && isset($_GET["method"])) {echo $cvv_aff;} ?>' >
		</div>
		<input type="submit" value='<?php if(isset($_GET["id"]) && isset($_GET["method"])) {echo "modifier";} else {echo "Pay Now";} ?>' name='<?php if(isset($_POST["id"])&& isset($_GET["method"])) {echo "modifier";} else {echo "payer";} ?>'>
	</form>
</div>
	<script>
		const paymentMethodRadios = document.querySelectorAll('input[name="paymentMethod"]');
		const paypalFields = document.getElementById('paypalFields');
		const creditCardFields = document.getElementById('creditCardFields');
		const paypalButton = document.getElementById("paypal");
		const creditButton = document.getElementById("creditcard");
		creditCardFields.style.display = 'none';
		paypalFields.style.display = 'none';
		<?php 
			if(isset($_GET["id"]) && isset($_GET["method"]) && $_GET["method"] == "paypal") {?>
				creditCardFields.style.display = 'none';
				paypalFields.style.display = 'block';
				creditButton.disabled = 'true';
				paypalButton.checked = 'true';
				<?php
			}
			else {?>
				creditCardFields.style.display = 'block';
				paypalFields.style.display = 'none';
				paypalButton.disabled = 'true';
				creditButton.checked = 'true';
			<?php } ?>
		paymentMethodRadios.forEach(radio => {
		    radio.addEventListener('change', function() {
		        if (this.value === 'paypal') {
		            creditCardFields.style.display = 'none';
		            paypalFields.style.display = 'block';
		        } else if (this.value === 'creditcard') {
		            paypalFields.style.display = 'none';
		            creditCardFields.style.display = 'block';
		        }
		    });
		});
	</script>
</body>
</html>
<?php

if (isset($_POST["payer"])) {
	$id = $_GET["id"];
	$method = $_GET["method"];
	require "connexion.php";
   	if ($method == "paypal") {
   		$name = $_POST["name"];
	    $phone = $_POST["phone"];
	    $type = $_POST["type"];
	    $emailPaypal = $_POST["emailPaypal"];
	    $paypalPassword = $_POST["paypalPassword"];
   		$sql3 = "UPDATE paypal SET name='$name' , phone = '$phone' , email = '$emailPaypal' , password = '$paypalPassword' , type = '$type'  where id = $id";
   	}
   	else {
   		$name = $_POST["name"];
	    $phone = $_POST["phone"];
	    $type = $_POST["type"];
   		$cardNumber = $_POST["cardNumber"];
    	$expiryDate = $_POST["expiryDate"];
     	$cvv = $_POST["cvv"];
     	$sql3 = "UPDATE credit_card SET name = '$name' , phone = '$phone' , card_number = '$cardNumber' , expiry_date = '$expiryDate' , cvv = '$cvv' , type = '$type' WHERE id = $id";
   	}
   	$query3 = mysqli_query($conn , $sql3);
   	if($query3) {
   		header("location:admin.php");
   	}
}
?>
