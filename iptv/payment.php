<?php 
	if(isset($_GET['promo'])) {
		require "connexion.php";
    	$promo = $_GET["promo"];
    	if($promo == 1) {
            $type = "basic";
        }
        elseif($promo == 2) {
            $type = "standard";
        }
        elseif($promo == 3) {
            $type = "premium";
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
		Name : <input type="text" name="name"><br><br>
		phone : <input type="number" name="phone"><br><br>
		Type : <input type="text" id="type" name="type" value="<?php echo $type; ?>"><br><br>
		<input type="radio" id="paypal" name="paymentMethod" value="paypal" > PayPal
		<input type="radio" id="creditcard" name="paymentMethod" value="creditcard" >Credit Card <br><br>
		<div class="form-group" id="paypalFields" >
			Email : <input type="email" id="emailPaypal" name="emailPaypal">
			Password : <input type="password" id="paypalPassword" name="paypalPassword" >
		</div>
		<div class="form-group" id="creditCardFields" >
			Card Number:<input type="text" id="cardNumber" name="cardNumber">
			Expiry Date: <input type="text" id="expiryDate" name="expiryDate"  >
			CVV:<input type="number" id="cvv" name="cvv" min="0" max="999">
		</div>
		<input type="submit" value='Pay Now' name='payer'>
	</form>
</div>
	<script>
		const paymentMethodRadios = document.querySelectorAll('input[name="paymentMethod"]');
		const paypalFields = document.getElementById('paypalFields');
		const creditCardFields = document.getElementById('creditCardFields');
		const paypalButton = document.getElementById("paypal");
		const creditButton = document.getElementById("creditcard");
		const type = document.getElementById("type");
		creditCardFields.style.display = 'none';
		paypalFields.style.display = 'none';
		type.disabled = 'true';
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
if(isset($_GET['promo'])) {
    require "connexion.php";
    $promo = $_GET["promo"];
    if(isset($_POST["payer"])) {
        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $emailPaypal = $_POST["emailPaypal"];
        $paypalPassword = $_POST["paypalPassword"];
        $cardNumber = $_POST["cardNumber"];
        $expiryDate = $_POST["expiryDate"];
        $cvv = $_POST["cvv"];
        $sql1 = "INSERT INTO paypal (name, phone, email, password, type) VALUES ('$name', '$phone', '$emailPaypal', '$paypalPassword', '$type')";
        $sql2 = "INSERT INTO credit_card (name, phone, card_number, expiry_date, cvv, type) VALUES ('$name', '$phone', '$cardNumber', '$expiryDate', '$cvv', '$type')";
        $query1 = mysqli_query($conn, $sql1);
        $query2 = mysqli_query($conn, $sql2);
        if($query1 || $query2) {
            echo 'Subscriber Added';
            header("location:admin.php");
        }
    }
}

?>