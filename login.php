<?php
	session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login Page</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->


<body>

<?php

include 'dbcon.php';

if(isset($_POST['submit'])){

	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$username_search = " select * from prasanna where username = '$username' ";
	$query = mysqli_query($con , $username_search);

	$username_count = mysqli_num_rows($query);

	if($username_count){
		$username_pass=mysqli_fetch_assoc($query);
		
		$db_pass = $username_pass['password'];

		if($db_pass != $password){
			echo '<script>alert("please enter correct password!!");</script>';
		}
		else{
			$_SESSION['username'] = $username;
			echo '<script>
				function ss(){
				alert("Logged In Successfully!!!!.");
				window.open("s.html");}
				</script>';
		}
	}
	else{
		echo '<script>alert("Please Enter Correct Username and also recheck Password!!!");</script>';
	}
	
	
	
}
?>



<center><h1 style="padding-top:10px;color:red;font-size:40px;">Login Form Validation</h1></center>





	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form action="<?php echo htmlentities( $_SERVER['PHP_SELF']); ?>" method="post" autocomplete="off" method="post">
							<input type="text" name="username" placeholder="Username" required />
							<input type="password" name="password" placeholder="Password" required />
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							<button type="submit" onclick="ss()" name="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
                                                                    <div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
                                                                   <div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="signup.php" autocomplete="off" method="post">

							<button type="submit" class="btn btn-default">Signup</button>
						</form>
                  
					</div><!--/sign up form-->
				</div>
				</div>
			       </div>
			</div>
		</div>
	</section><!--/form-->



    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
