<?php

include("connection.php");

$query = "SELECT * FROM users ORDER BY id DESC";
$stmt = $connection->prepare($query);
$stmt->execute();
$results = $stmt->get_result();

?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
 
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="section-title">SIGN UP</h2>
	
      </div>
      <div class="col-lg-8 mx-auto">
        <div class="bg-white rounded text-center p-5 shadow-down">
          <form action="signup.php" method="POST" class="row">
            <div class="col-md-6">
              <input type="text" id="username" name="username" placeholder="Username" class="form-control px-0 mb-4" required>
            </div>
            <div class="col-md-6">
              <input type="email" id="email" name="email" placeholder="Email Address" class="form-control px-0 mb-4" required>
            </div>
            <div class="col-md-12">
              <input type="password" id="password" name="password" placeholder="Password" class="form-control px-0 mb-4" required>
            </div>
			
			<div class="col-md-12">
              <input type="password" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password" class="form-control px-0 mb-4" required>
            </div>
			
			<div class="form-group">
			<label class="form-check-label"><input type="checkbox" required="required"> I Agree to the Terms & Conditions</label>
		</div>
		
            <div class="col-lg-6 col-10 mx-auto">
              <button class="btn btn-primary w-100">Sign Up</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

<!--<div class="signup-form">
    <form action="signup.php" method="POST" class="row">
		<h2>Register</h2>
		<p class="hint-text">Create your account</p>
        <div class="form-group">
			<div class="row">
				<div class="col">
				<input type="text" class="form-control" name="username" placeholder="Username" required="required"></div>
			</div>        	
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="cpass" placeholder="Confirm Password" required="required">
        </div>
          
        <div class="form-group">
			<label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> & <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
            <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Register Now</button>
        </div>
        <div class="text-center">Already have an account? <a href="login.php">Sign in</a></div>
    </form>-->
	
</div>
</body>
</html>