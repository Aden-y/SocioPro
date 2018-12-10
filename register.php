<?php
session_start();
if (isset($_SESSION['id'])) {
	header("Location:newsfeeds.php");

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ScioPro | Register</title>
</head>
   <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="stylesheet" type="text/css" href="./css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./css/ionicons.min.css">
<body>
<div class="mainContainer">
	
		<div class="topNav">
		<div class="wrapper">
			<div class="logo">
				<div class="logoText">
					<b>Socio</b>Pro
				</div><!--logo text-->
				
			</div><!--logo-->
					<div class="searchBox">
			<form id="search">
			<input type="text" name="search" placeholder="Search" class="inputSearch">
			</form>
			
		</div><!--search box-->
		<div class="topNavMenu" id="topNavMenu">
			<li>
				<?php
				//$_SESSION['username']=2;
				if(isset($_SESSION['username'])){?>

			<a href="#"><img src="./img/socioProUploads/icons/home-black.png" class="iconImg">&nbsp;Home</a>
			<a href="logout.php"><img src="./img/socioProUploads/icons/log-out.png" class="iconImg">&nbsp;Logout</a>
			<a href="newsfeeds.php"><img src="./img/socioProUploads/icons/home-black.png" class="iconImg">&nbsp;News feeds</a>
			<a href="#"><img src="./img/socioProUploads/icons/home-black.png" class="iconImg">&nbsp;Notifications</a>
			<a href="#"><img src="./img/socioProUploads/icons/chatboxes.png" class="iconImg">&nbsp;Chats</a>
			<a href="#"><img src="./img/socioProUploads/icons/info-black.png" class="iconImg">&nbsp;About</a>
			<a href="#"><img src="./img/socioProUploads/icons/info-black.png" class="iconImg">&nbsp;Feeback</a>

			
			<?php

			}
			else{	?>
			<a href="#"><img src="./img/socioProUploads/icons/home-black.png" class="iconImg">&nbsp;Home</a>
			<a href="login.php"><img src="./img/socioProUploads/icons/log-in.png" class="iconImg">&nbsp;Sign in</a>
			<a href="register.php"><img src="./img/socioProUploads/icons/user-black.png" class="iconImg">&nbsp;Sign up</a>

			<?php
			} ?>



		</li>
       <div class="topnavprofilepic"><img src="" alt="img"></div>
		</div><!--top Nav menu-->

		</div><!--wrapper-->
     
	</div><!--top nav-->
	<div class="mycontainer">
		<center>
		<div class="mycard" id="createAccountCard">
 		<div class="cardHeader">
 			<h2>Create account</h2>
 		</div><!--card Header-->
 		<div class="cardbody">
 		 <form class="signupForm userdetails" id="signupForm" onsubmit="return false">
 			<div class="inputHolder">
 			<label class="inputLabel">First name</label>
 			 <small class="hideme inputErr" id="fnameErr"></small>
 			<input type="text" name="fname" id="fname"  placeholder="Enter first name" value="Joakim">	
 			</div>
 			<div class="inputHolder">
 			<label class="inputLabel">Last name</label>
 			 <small class="hideme inputErr" id="lnameErr"></small>
 			<input type="text" name="lname" id="lname" placeholder="Enter last name">
 				
 			</div>
 			 <div class="inputHolder">
 			 <label class="inputLabel">Username</label>
 			  <small class="hideme inputErr" id="usernameErr"></small>
 			<input type="text" name="username"  id="username" placeholder="Enter username">
 		</div>
 		 <div class="inputHolder">
 			 <label class="inputLabel">Email</label>
 			  <small class="hideme inputErr" id="emailErr"></small>
 			<input type="email" name="email"  id="email" placeholder="Enter Email">
 		  </div>
 		    <div class="inputHolder">
 			 <label class="inputLabel">Password</label>
 			  <small class="hideme inputErr" id="pwdErr"></small>
 			<input type="password" name="password"  id="password" placeholder="Enter pasword">
 		  </div>
 		    <div class="inputHolder">
 			 <label class="inputLabel">Confirm Password</label>
 			  <small class="hideme inputErr" id="conpwdErr"></small>
 			<input type="password" name="confirm_password"  id="confirm_password" placeholder="Re-type password">
 		  </div>
 			<button class="formBtn">Sign up</button>
 			
 		</form><!--signup form-->
 		</div><!--card Body-->
 		<div class="cardFooter">
 			<a href="login.php">Sigin in with an existing account</a>
 		</div><!--card Footer-->
	 		
 	</div><!--card-->
	</center>
		
	</div><!--container-->
</div><!--mainContainer-->
<footer>
	<div class="footerWraper">
		<div class="footerItems">
			<ul>
		<a href="#">About</a>
		<a href="#">FAQ</a>
		<a href="#">Terms & conditions</a>
		</ul>
		</div><!--Links-->

	</div><!--footer Wrapper-->
</footer>
<script src="js/jquery.min.js"></script>
<script >
	$(document).ready(function(){
		$('#signupForm').on('submit',function(){
			var register=false;
			if ($('#fname').val()=="") {
				$('#fnameErr').text("Please enter your first name");
				$('#fnameErr').show();
				register=false;
			}else{
				$('#fnameErr').text("");
				$('#fnameErr').hide();
				register=true;
			}

				if ($('#lname').val()=="") {
				$('#lnameErr').text("Please enter your last name");
				$('#lnameErr').show();
				register=false;
			}else{
				$('#lnameErr').text("");
				$('#lnameErr').hide();
				register=true;
			}

			if ($('#username').val()=="") {
				$('#usernameErr').text("Please choose a username!");
				$('#usernameErr').show();
				register=false;
			}else{
				$('#usernameErr').text("");
				$('#usernameErr').hide();
				register=true;
			}

			if ($('#email').val()=="") {
				$('#emailErr').text("Please enter your email!");
				$('#emailErr').show();
				register=false;
			}else{
				$('#emailErr').text("");
				$('#emailErr').hide();
				register=true;
			}
				if ($('#password').val()=="") {
				$('#pwdErr').text("Please enter your password");
				$('#pwdErr').show();
				register=false;
			}else{
				$('#pwdErr').text("");
				$('#pwdErr').hide();
				register=true;
			}
				if ($('#password').val().length < 6) {
				$('#pwdErr').text("Please enter a password of 6 or more characters");
				$('#pwdErr').show();
				register=false;
			}else{
				$('#pwdErr').text("");
				$('#pwdErr').hide();
				register=true;
			}
				if ($('#confirm_password').val()!= $('#password').val()) {
				$('#conpwdErr').text("Make sure the passwords match!");
				$('#conpwdErr').show();
				register=false;
			}else{
				$('#conpwdErr').text("");
				$('#conpwdErr').hide();
			}
			if(register){
				var fname=$('#fname').val();
				var lname=$('#lname').val();
				var username=$('#username').val();
				var email=$('#email').val();
				var password=$('#password').val();

				$.ajax({
					url:"http://localhost/socioPro/database/manage.php",				
					method:'post',
					data:{fname:fname,lname:lname,username:username,email:email,password:password,reg:1},
					success:function(response){
						if (response=="USERNAME_TAKEN") {
							$('#usernameErr').text(response);
							$('#usernameErr').show();
						}else if (response=="ADDED") {
							$('#usernameErr').text(response);
							$('#usernameErr').hide();
							window.location("login.php");
						}else{
							console.log(response);
						}
					},
					error:function(response){
						console.log(response);
					}
				});
			}

});
	});
</script>
</body>
</html>