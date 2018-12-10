<?php
session_start();
if (isset($_SESSION['id'])) {
	header(("Location:newsfeeds.php"));
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ScioPro | Login</title>
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
			<a href="#"><img src="./img/socioProUploads/icons/log-out.png" class="iconImg">&nbsp;Logout</a>
			<a href="#"><img src="./img/socioProUploads/icons/home-black.png" class="iconImg">&nbsp;News feeds</a>
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
 			<h2>Login to your account</h2>
 		</div><!--card Header-->
 		<div class="cardbody">
 		 <form class="signupForm userdetails" id="loginForm" onsubmit="return false">

 			 <div class="inputHolder">
 			 <label class="inputLabel">Username</label>
 			 <small class="hideme inputErr" id="loginusernameerror"></small>
 			<input type="text" name="loginusername"  id="loginusername" placeholder="Enter username or Email">
 		</div>
 		    <div class="inputHolder">
 			 <label class="inputLabel">Password</label>
 			 <small class="hideme inputErr" id="loginpwderror"></small>
 			<input type="password" name="loginpassword"  id="loginpassword" placeholder="Enter pasword">
 		  </div>

 			<button class="formBtn">Login</button>
 			
 		</form><!--signup form-->
 		</div><!--card Body-->
 		<div class="cardFooter">
 			<a href="register.php">Create an account</a>
 			<div style="margin-top: 20px;">
 				<a href="#">Forgot your password</a>
 			</div>
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
<script type="text/javascript" src="js/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		
		$('#loginForm').on('submit',function(){
		
		 var login=false;
		 if ($('#loginusername').val()=="") {
		 	$('#loginusernameerror').text("Input username please!");
		 	$('#loginusernameerror').show();
		 	login=false;
		 }else{
		 	$('#loginusernameerror').text("");
		 	$('#loginusernameerror').hide();
		 	login=true;
		 }
		 if ($('#loginpassword').val()=="") {
		 	$('#loginpwderror').text("Input password please!");
		 	$('#loginpwderror').show();
		 	login=false;

		 }else{
		 	$('#loginpwderror').text("");
		 	$('#loginpwderror').hide();

		 }
		 if (login) {
		 	var username=$('#loginusername').val();
		 	var pwd=$('#loginpassword').val();
		 $.ajax({
		 	url:"http://localhost/socioPro/database/manage.php",
		 	method:"post",
		 	///data:$('loginForm').serialize(),
		 	data:{user:username,pwd:pwd,login:1},
		 	success:function(response){
		 		if (response=="LOGGED") {
		 			window.location("newsfeeds.php");
		 		}else if (response=="WRONG_PASSWORD") {
		 			$('#loginpwderror').text("Wrong password!");
		 				$('#loginpwderror').show();

		 		}else if (response=="NOT_REGISTERED") {
		 			$('#loginusernameerror').text("Username doesn't exist!");
		 				$('#loginusernameerror').show();

		 		}else{
		 			console.log(response);
		 			alert(response);
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