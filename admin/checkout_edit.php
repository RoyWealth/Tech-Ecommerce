<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$firtsname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $address = $_POST['address'];
		$city = $_POST['city'];
		$country = $_POST['country'];
        $zip_code = $_POST['zip_code'];
        $telephone = $PSOT['telephone'];



		$conn = $pdo->open();
		$stmt = $conn->prepare("SELECT * FROM checkout WHERE email=:email");
		$stmt->execute(['ID'=>$ID]);
		$row = $stmt->fetch();


		try{
			$stmt = $conn->prepare("UPDATE checkout SET  firstname=:firstname, lastname=:lastname, email=:email, address=:address, city=:city, country=:country, zip_code=:zip_code, telephone=:telephone WHERE email=:email");
			$stmt->execute(['firstname'=>$firstname, 'lastname'=>$lastname, 'email'=>$email, 'address'=>$address, 'city'=>$city, 'zip_code'=>$zip_code, 'telephone'=>$telephone]);
			$_SESSION['success'] = 'Checkout Form updated successfully';

		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up Checkout Form first';
	}

	header('location: checkout.php');

?>