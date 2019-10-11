<?php include 'includes/session.php'; ?>
<?php include 'includes/scripts.php'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php
	$email = @$_GET['checkout'];

	$conn = $pdo->open();

	try{
		$stmt = $conn->prepare("SELECT * FROM checkout WHERE email = :email");
		$stmt->execute(['email' => $email]);
		$checkout = $stmt->fetch();
		$checkoutid = $checkout['id'];
	}
	catch(PDOException $e){
		echo "There is some problem in connection: " . $e->getMessage();
	}

	$pdo->close();

?>

    <!-- BREADCRUMB -->
    <div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Contact Us</h3>
						<ul class="breadcrumb-tree">
							<li><a href="#">Home</a></li>
							<li class="active">Contact Us</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<?php
  if(isset($_SESSION['checkout'])){
    header('location: cart_view.php');
  }
?>

<body class="hold-transition login-page">

  	<?php
      if(isset($_SESSION['error'])){
        echo "
          <div class='callout callout-danger text-center'>
            <p>".$_SESSION['error']."</p> 
          </div>
        ";
        unset($_SESSION['error']);
      }
      if(isset($_SESSION['success'])){
        echo "
          <div class='callout callout-success text-center'>
            <p>".$_SESSION['success']."</p> 
          </div>
        ";
        unset($_SESSION['success']);
      }
	?>
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
confirm("You have entered:" + "\n FirstName : "  + firstname + "\n LastName " + lastname + "\n Email : " + email + "\n Address : " + address + "\n City :" + city + "\n Country :" + country + "\n Zip Code :" + zip_code  + "\n Telephone :" + telephone +  "\n Thanks For Your Patronage We will Send you a Message Shortly.")
}
</SCRIPT>

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-7">
						<!-- Billing Details -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Fill In your Info to Contact Us</h3>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="first-name" id="firstname" placeholder="First Name">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="last-name" id="lastname" placeholder="Last Name">
							</div>
							<div class="form-group">
								<input class="input" type="email" name="email" id="email" placeholder="Email">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="address" id="address" placeholder="Address">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="city" id="city" placeholder="City">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="country" id="country" placeholder="Country">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="zip-code" id="zip_code" placeholder="ZIP Code">
							</div>
							<div class="form-group">
								<input class="input" type="tel" name="tel" id="telephone" placeholder="Telephone">
							</div>
							<!-- <div class="form-group">
								<div class="input-checkbox">
									<input type="checkbox" id="create-account">
									<label for="create-account">
										<span></span>
										Create Account?
									</label>
									<div class="caption">
										<p>If You have an Account that is Registered Kindly put in your Password</p>
										<input class="input" type="password" name="password" placeholder="Enter Your Password">
									</div>
								</div>
							</div> -->
						</div>
						<!-- /Billing Details -->

						<!-- Shiping Details -->
						<!-- <div class="shiping-details">
							<div class="section-title">
								<h3 class="title">Shiping address</h3>
							</div>
							<div class="input-checkbox">
								<input type="checkbox" id="shiping-address">
								<label for="shiping-address">
									<span></span>
									Ship to a diffrent address?
								</label>
								<div class="caption">
									<div class="form-group">
										<input class="input" type="text" name="first-name" placeholder="First Name">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="last-name" placeholder="Last Name">
									</div>
									<div class="form-group">
										<input class="input" type="email" name="email" placeholder="Email">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="address" placeholder="Address">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="city" placeholder="City">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="country" placeholder="Country">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="zip-code" placeholder="ZIP Code">
									</div>
									<div class="form-group">
										<input class="input" type="tel" name="tel" placeholder="Telephone">
									</div>
								</div>
							</div> -->
						</div>
						<!-- /Shiping Details -->

						<!-- Order notes -->
						<!-- <div class="order-notes">
							<textarea class="input" placeholder="Order Notes"></textarea>
						</div> -->
						<!-- /Order notes -->
					</div>

					<!-- Order Details -->
					<div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">CONTACT ENQUIRIES</h3>
						</div>
						<div class="payment-method">
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-1">
								<label for="payment-1">
									<span></span>
									Direct Bank Transfer
								</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-2">
								<label for="payment-2">
									<span></span>
									Cheque Payment
								</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-3">
								<label for="payment-3">
									<span></span>
									Paypal System
								</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
						</div>
						<div class="input-checkbox">
							<input type="checkbox" id="terms">
							<label for="terms">
								<span></span>
								I've read and accept the <a href="#">terms & conditions</a>
							</label>
						</div>
						<a href="" class="primary-btn order-submit" onclick="show()">Submit Contact</a>
					</div>
					<!-- /Order Details -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

        		<!-- NEWSLETTER -->
	
		<!-- /NEWSLETTER -->
        <?php include 'includes/footer.php'; ?>