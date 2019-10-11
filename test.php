
<!DOCTYPE HTML>
<HTML> 
<HEAD>
<SCRIPT>
function show(){
var $firstname = document.getElementById("firstname").value;
var $lastname = document.getElementById("lastname").value;
var $email = document.getElementById("email").value;
var $address = document.getElementById("address").value;
var $city = document.getElementById("city").value;
var $country = document.getElementById("country").value;
var $zip_code = document.getElementById("zip_code").value;
var $telephone = document.getElementById("telephone").value;
confirm("You have entered:" + "\n FirstName : "  + firstname + "\n LastName " + lastname + "\n Email : " + email + "\n Address : " + address + "\n City :" + city + "\n Country :" + country + "\n Zip Code :" + zip_code  + "\n Telephone :" + telephone +  "\n Thanks For Your Patronage your Product will be Delivered to you Soon.")
}
</SCRIPT>
</HEAD>
<body>
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
                        $output['message'] = 'Thanks For Your Patronage your Product will be Delivered to you Soon. ';
                    }
                    
                }
                else{
                    $output['error'] = true;
			        $output['message'] = 'Already been Checkedout';
                }
            }
        }
        // else{
        // 	$_SESSION['error'] = 'Email not found';
        // }
    }
    
    catch(PDOException $e){
        $output['error'] = true;
		$output['message'] = $e->getMessage();
        echo "There is some problem in connection: " . $e->getMessage();
    }

}
else{
    // $_SESSION['error'] = 'Input Checkout credentails first';
}


$pdo->close();

header('location: checkout.php');


?>

</body>
</HTML>
