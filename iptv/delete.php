<?php 
	if(isset($_GET["id"])) {
		$id = $_GET["id"];
		require "connexion.php";
		$sql = "DELETE FROM users WHERE id = $id";
		$query = mysqli_query($conn ,$sql);
		if($query) {
			header("location:admin.php");
		}
		else {
			echo "ERROR";
		}
	}

	if(isset($_GET["id"]) && isset($_GET["method"]) && $_GET["method"] == "credit_card") {
		$id = $_GET["id"];
		$method = $_GET["method"];
		require "connexion.php";
		$sql = "DELETE FROM credit_card WHERE id = $id";
		$query = mysqli_query($conn , $sql);
		if($query) {
			header("location:admin.php");
		}
		else {
			echo "ERROR";
		}
	}
	elseif(isset($_GET["id"]) && isset($_GET["method"]) && $_GET["method"] == "paypal") {
		$id = $_GET["id"];
		$method = $_GET["method"];
		require "connexion.php";
		$sql = "DELETE FROM paypal WHERE id = $id";
		$query = mysqli_query($conn , $sql);
		if($query) {
			header("location:admin.php");
		}
		else {
			echo "ERROR";
		}
	}
?>
