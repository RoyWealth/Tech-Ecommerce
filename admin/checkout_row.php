<?php 
	include 'includes/session.php';

	if(isset($_POST['email'])){
		$email = $_POST['email'];
		
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT * FROM checkout WHERE email=:email");
		$stmt->execute(['email'=>$email]);
		$row = $stmt->fetch();
		
		$pdo->close();

		echo json_encode($row);
	}
?>