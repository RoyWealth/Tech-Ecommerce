<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$firtsname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $address = $_POST['address'];
		$city = $_POST['city'];
		$country = $_POST['country'];
        $zip_code = $_POST['zip_code'];
        $telephone = $PSOT['telephone'];

		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM checkout WHERE email=:email");
		$stmt->execute(['email'=>$email]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Email already taken';
		}
			try{
				$stmt = $conn->prepare("INSERT INTO checkout (firstname, lastname, email, address, city, country, zip_code, telephone) VALUES (:firstname, :lastname, :email, :addresss, :city, :country, :zip_code, :telephone)");
				$stmt->execute(['firstname'=>$firstname, 'lastname'=>$lastname, 'email'=>$email, 'address'=>$address, 'city'=>$city, 'zip_code'=>$zip_code, 'telephone'=>$telephone]);
				$_SESSION['success'] = 'Checkout Form Created Successfully';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up Checkout Form first';
	}

	header('location: checkout.php');

?>