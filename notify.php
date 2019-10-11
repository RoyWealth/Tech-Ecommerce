<?php
	include 'includes/session.php';
	$conn = $pdo->open();

	if(isset($_POST['checkout'])){
		
        $email = $_POST['email'];
        $firstname = $_POST['firstname'];
        
	

		try{

			$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE email = :email");
			$stmt->execute(['email'=>$email]);
			$row = $stmt->fetch();
			if($row['numrows'] > 1){
				if($row['status']){
					if(firstname_notify($firstname, $row['firstname'])){
						if($row['type']){
							$_SESSION['user'] = $row['id'];
						}
					}
					// else{
					// 	$_SESSION['error'] = 'Incorrect Email';
					// }

					else{
						function checkout(){
							$message = "Thanks for your Patronage your Product will be delivered to you Soon.";
							echo "<script type='text/javascript'>alert('$message');</script>";
						};

					}
				}
			}
			// else{
			// 	$_SESSION['error'] = 'Email not found';
            // }

            
           
           
     
        }
        
		catch(PDOException $e){
			echo "There is some problem in connection: " . $e->getMessage();
		}

    }
	else{
		$_SESSION['error'] = 'Input Checkout credentails first';
    }
    

    $pdo->close();

    header('location: checkout.php');

?>

