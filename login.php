<?php
//this is to transfer them to the right page if they have already logged in
	session_start();
	if(isset($_SESSION["email"]))//aldy logged in
	{
		header('Location:index.php');
		//redirect
	}
	else if(isset($_SESSION["staff_check"]))
	{
		header('Location:staff_page.php');
	}
	else if(isset($_SESSION["customer_check"]))
	{
		header('Location:index.php');
	}
	/*
		if is not login, redirect to home page
		if staff haas aldy login, redirect to staff page
		if custoemr has aldy login, redirect to customer page
		
	
	
	*/
	
?>
<!DOCTYPE html>
<!--insert detect page reload in js -->
<html lang="en">

<head>
<link rel = "shortcut icon" href = "img/fav.png" />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
	<link rel = "shortcut icon" href = "img/fav.png" />
  <title>Customer - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <style>
		#err_user
		{
			color:red;
		}
		
  </style>
  
  
	
	
</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
					<?php
						if(isset($_POST['blacklist']))
						{
							echo("<p id = 'err_user'>Sorry, access is denied. If you think this is an error, please contact our database administrator at database.admin@sakilastaff.org</p>");
						}
						else if(isset($_POST['error1']))
						{
							echo("<p id = 'err_user'>Password is incorrect!</p>");
						}
					?>
                  </div>
                  <form id = "login" class="user" method = "post" action = "login_check.php">
                    <div class="form-group">
						<!-- email -->
                      <input name = "InputEmail_customer"type="email" class="form-control form-control-user" id="InputEmail_customer" aria-describedby="emailHelp" placeholder="Enter Email Address..." required = "required" value = "<?php echo (isset($_POST['error1'])?$_POST['error1']:'')?>">
					  
                    </div>
                    <div class="form-group">
						<!-- password -->
                      <input name = "InputPassword_customer"type="password" class="form-control form-control-user" id="InputPassword_customer" placeholder="Password" required = "required">
					  
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <input name = "submit" type = "submit" value = "Login" class="btn btn-primary btn-user btn-block" id = "logins" style = "cursor:pointer" />
                   
                    <hr>
                    <a href="" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Login with Google
                    </a>
                    <a href="" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                    </a>
					
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.php">Create an Account!</a>
                  </div>
				  <div class="text-center">
					<b><a class="small" href="staff_login.php">Staff login</a></b>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
	
      </div>

    </div>
	
  </div>
  
 
  
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
