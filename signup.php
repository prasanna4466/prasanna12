<?php

if(isset($_POST['username'])){
    $server="localhost";
    $username="root";
    $password="";

    $con = mysqli_connect($server,$username,$password);

    if(!$con){
        die("conection die due to ".mysqli_connect_error());
    }
    //echo "Successfully Connected to db";

    $username = $_POST['username'];
    $emailid = $_POST['emailid'];
    $password = $_POST['password'];
    $mobilenumber = $_POST['mobilenumber'];

    $sql = "INSERT INTO `prasanna`.`prasanna` (`username`, `emailid`, `password`, `mobilenumber`) VALUES ('$username', '$emailid', '$password', '$mobilenumber');";
    //echo $sql;

    if($con->query($sql) == true){
        //echo "succesfully Inserted";
      }
  
      else{
        echo "ERROR: $sql <br> $con->error";
      }
  
      $con->close();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> Signup Page</title>
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
	           
	<center><h1 style="padding-top:10px;color:red;font-size:40px;">Signup Form Validation</h1></center>
	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="signup.php" autocomplete="off" method="post">
							<form action="signup.php" autocomplete="off" method="post">
                                                                                                                 
							<input id="uname" type="text"  onblur="user('uname','1')" name="username" placeholder="Username"/>
                                                                                                                  <div id="1" value=""></div>
                                                                                                                <input id ="email" name="emailid" type="text" onblur="eval('email','2')"  placeholder="Email Address"/>
                                                                                                                    <div id="2" value=""></div>
                                                                                                                    <input id="pass" type="password" onblur="pasd('pass','4')" name="password" placeholder="Set Password"/>
                                                                                                                    <div id="4" value=""></div>
                                                                                                                  <input id ="mno" name = "mobilenumber" type="text" onblur="phno('mno','3')"  placeholder="Mobile Number"/>
                                                                                                                    <div id="3" value=""></div>
							 
							<button type="submit" class="btn btn-default" onclick="final();ck()">Signup</button>
						</form>
  <script>
    function ck(){
        alert("Registration Successfully.....");
    }
	  var flag1=0;
          var flag2=0;
          var flag3=0;
          var flag4=0;
                                                                                                                  
function user(id,lb)
  {
     var x = document.getElementById(id).value ;
     var txt = document.getElementById(lb).value ;
    
    if(x != ""){
       if(isNaN(x) == false)
         document.getElementById(lb).innerHTML =" <font color=red> Username can't be Number</font>";
       else
        {
         document.getElementById(lb).innerHTML = null;
         flag1++;
        }
      }
   else
    document.getElementById(lb).innerHTML = "<font color=red>   *Required</font>";
 }
	  
function eval(id,lb)
  {
      var x = document.getElementById(id).value ;
      var txt = document.getElementById(lb).value ;
      var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
   if(x != ""){
       if(reg.test(x) == false)
         document.getElementById(lb).innerHTML =" <font color=red>   Enter a valid email address</font>";
       else
         {
          document.getElementById(lb).innerHTML = null;
          flag2++;
         }
      }
   else
      document.getElementById(lb).innerHTML = "<font color=red>  *Required</font>";
  }

function phno(id,lb)
{
     var x = document.getElementById(id).value ;
     var txt = document.getElementById(lb).value ;
    var reg =/^\d{10}$/;
  if(x != ""){
    if(reg.test(x) == false)
       document.getElementById(lb).innerHTML =" <font color=red>   Enter a valid Mobile Number</font>";
    else
      {
       document.getElementById(lb).innerHTML = null;
       flag3++;
      }
   }
 else
    document.getElementById(lb).innerHTML = "<font color=red>  *Required</font>";
}

function pasd(id,lb)
   {
    var x = document.getElementById(id).value ;
    var txt = document.getElementById(lb).value ;
    var reg =  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
   if(x != ""){
     if(reg.test(x) == false)
        document.getElementById(lb).innerHTML =" <font color=red>Password must be of 6 to 20 characters with at least one digit, one uppercase,at least one special character & one lowercase letter.</font>";
    else
     {
      document.getElementById(lb).innerHTML = null;
      flag4++;
     }
  }
  else
   document.getElementById(lb).innerHTML = "<font color=red>  *Required</font>";
 }


function final()
 {
   if (flag1 !=0 && flag2 !=0 && flag3 !=0 && flag4!=0)
     {
       alert("Registration Successfully....!!!");
        window.open("login.php");
     }
  else
    alert("Please fill the correct Credentials");
 }     
                                                            
</script>  
					</div><!--/sign up form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--login form-->
						<h2>Already have an Account?Log-in</h2>
						<form action="login.php" autocomplete="off" method="post">
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
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



