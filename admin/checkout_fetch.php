<?php
	include 'includes/session.php';

	$output = '';

	$conn = $pdo->open();

	$stmt = $conn->prepare("SELECT * FROM checkout");
	$stmt->execute();

	foreach($stmt as $row){
		$output .= "
			<option value='".$row['email']."' class='append_items'>".$row['firstname']."</option>
		";
	}

	$pdo->close();
	echo json_encode($output);

?>