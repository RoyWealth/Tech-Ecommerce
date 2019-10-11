<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$email = $_POST['email'];
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("DELETE FROM checkout WHERE email=:email");
			$stmt->execute(['email'=>$email]);

			$_SESSION['success'] = 'Checkout Form deleted successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select Checkout Form to delete first';
	}

	header('location: checkout.php');
	
?>