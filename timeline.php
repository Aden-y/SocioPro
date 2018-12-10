<?php
echo "love";
session_start();

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

	<!--MAIN BODY------------------------>
	<div class="mycontainer">
		<div class="leftMenu">
			<div class="toholdprofilepic">
				<img src="./img/socioProUploads/profileImg/person.png" alt="Profile Picture" class="profilepic" id="profilepic">
			</div>
			<div class="toholdusername"><h3 id=""><?php echo $_SESSION['username'];?></h3></div><!--To hold username-->
			<div id="accountsettingsdiv" class="toholdleftmenulinks">
				<a href="profile.php">Account settings</a>

			</div><!--account settings div-->
			<div id="mytimelinediv" class="toholdleftmenulinks">
				<a href="timeline.php">My Timeline</a>
				
			</div><!--my timeline div-->
				<div id="myfirendsdiv" class="toholdleftmenulinks">
				<a href="friends.php">My Friends<span class="numSpan">10</span></a>
			</div><!--my Friends div-->
			<div id="myfollowersdiv" class="toholdleftmenulinks">
				<a href="#">Followers <span class="numSpan">100</span></a>
			</div><!--my followers div-->
				<div id="myfollowingsdiv" class="toholdleftmenulinks">
				<a href="#">Following <span class="numSpan">200</span></a>
			</div><!--my following div-->

				<div id="findfriendsdiv" class="toholdleftmenulinks">
				<a href="findfriends.php">Find Friends</a>
			   </div><!--my following div-->
		</div><!--left menu-->
		<div class="accountSettings">
		<h2>My Timeline</h2>
		<div class="timelinewrapper">
			<div class="toholdprofilepicontimeline">
				<img src="./img/socioProUploads/profileImg/person.png" alt="Profile Picture" class="profilepicontimeline" id="profilepic">
			</div><!--to hold profile pic on timeline-->
			<div class="toholdtimelineevents">
				<div class="singleeventdiv">
					<label><b>Joakim Adeny</b></label>
					<small class="postdateholder"><?php echo date("Y-d-m");?></small>
					<p>
					However, the compiler will give an error in such a situation (stating that specialization comes after
					instantiation). Incidentally, it can happen that a generic class template explicitly “mentions” a special case, as
					a parameter in some member function. The following code in fact causes the aforementioned compiler error.
					</p>
					<textarea class="commenttextarea" cols="40"></textarea>
					<small style="padding-bottom: 5px;"><button class="btncoment"><img src="./img/socioProUploads/icons/comment-black.png" class="iconImg"></button><img src="./img/socioProUploads/icons/bars-black.png" alt="Options" class="optionsicon" id="optionsicon"></small>
					<br>
					<small><button class="btnlike"><img src="./img/socioProUploads/icons/thumbs_up.gif" class="iconImg">Like</button><a href="#" class="likers"><span>25</span>&nbsp;likes</a></small>
				</div>
				
			</div><!--holds timeline events-->
		</div><!--timeline wrapper-->

		</div><!-- account settings container-->
		
	</div><!--container-->
</div><!--mainContainer-->

<!--FOOTER---------------------------->
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

</body>
</html>
