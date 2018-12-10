<?php
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
			<div class="toholdusername"><h3><?php echo $_SESSION['username'];?></h3></div><!--To hold username-->
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
		<h2>Update Profile</h2>
		<div class="toholdupdateprofileform">
			<form class="updateUserDetailsForm" id="updateprofileform" onsubmit="return false">
				<div class="inputHolder inputHolderupdateuserDetails">
				<label class="inlinelabel"><h3><img src="./img/socioProUploads/icons/user-black.png" class="iconImg">&nbsp;Name</h3></label>

				<label id="accountsettingsfullname">Joakim Adeny</label>
				<button class="btneditinline" id="editname"><img src="./img/socioProUploads/icons/edit-black.png" class="iconImg" alt="ic"></button><br><br>

				<input type="text" name="changefullname" class="hideme" placeholder="Enter new full name" id="changefullname">
				<small class="inputErr hideme">Invalid name</small>
				</div>
				<br>
				<div class="inputHolder inputHolderupdateuserDetails">
				<label class="inlinelabel"><h3><img src="./img/socioProUploads/icons/user-black.png" class="iconImg">Username&nbsp;</h3></label>
				<label id="accountsettingsusername">Kis156</label>
				<button class="btneditinline" id="edidusername"><img src="./img/socioProUploads/icons/edit-black.png" class="iconImg"></button><br><br>
				<input type="text" name="changeusername" class="hideme" id="changeusername">
				<small class="inputErr hideme">Invalid username</small>
				</div>
				<div class="inputHolder inputHolderupdateuserDetails">
				<label class="inlinelabel"><h3><img src="./img/socioProUploads/icons/user-black.png" class="iconImg">&nbsp;Email</h3></label>
				<label id="accountsettingsemail">kim@gmail.com</label>
				<button class="btneditinline" id="editemail"><img src="./img/socioProUploads/icons/edit-black.png" class="iconImg"></button>
				<br>
				<input type="text" name="changeemail" class=" hideme" id="changeemail">
				<small class="inputErr hideme">Invalid email</small>
				</div>
				<div class="inputHolder inputHolderupdateuserDetails">
				<label class="inlinelabel"><h3><img src="./img/socioProUploads/icons/user-black.png" class="iconImg">&nbsp;About</h3></label>
				<p id="accountsettingsabout">
					Students and instructors of today have increasing demands on their time and money. Pearson
					has responded to that need by offering digital texts and course materials online
					through CourseSmart. CourseSmart allows faculty to review course materials online, saving
					time and costs. It offers students a high-quality digital version of the text for less than
					the cost of a print copy of the text. Students receive the same content offered in the print
					textbook enhanced by search, note-taking, and printing tools. For more information, visit
					www.coursesmart.com.
				</p>
				<button class="btneditinline" id="editabout"><img src="./img/socioProUploads/icons/edit-black.png" class="iconImg"></button><br>
				<textarea cols="50" rows="5" class="hideme" name="changeabout" id="changeabout"> </textarea>
				<small class="inputErr hideme"></small>
				</div>
					<div class="inputHolder inputHolderupdateuserDetails">
				<label class="inlinelabel"><h3><img src="./img/socioProUploads/icons/location.png" class="iconImg">&nbsp;Schooling</h3></label>
				<table id="accountsettingsschooling">
					<tr>
						<th>Institution</th>
						<th>Level</th>
						<th>Years</th>
						<th>Edit/Delete</th>
					</tr>
					<tr>
						<td>Bunde Primary School</td>
						<td>Primary</td>
						<td>2006-2009</td>
						<td>
							<button class="btneditinline"><img src="./img/socioProUploads/icons/edit-black.png" class="iconImg iconImgtd"></button>
							<button class="btneditinline"><img src="./img/socioProUploads/icons/delete-black.png" class="iconImg iconImgtd"></button>
						</td>
					</tr>

				</table>
				<button class="btneditinline"><img src="./img/socioProUploads/icons/plus-black.png" class="iconImg"></button>
				<br>
				<input type="text" name="" class=" hideme">
				<small class="inputErr hideme"></small>
				</div>
							<div class="inputHolder inputHolderupdateuserDetails">
				<label class="inlinelabel"><h3><img src="./img/socioProUploads/icons/location-black.png" class="iconImg">&nbsp;Where do you come from?</h3></label>
				<span style="float: left;  margin-top: 5px;" id="accountsettingslocation">Not updated</span>
				<button class="btneditinline" id="editlocation"><img src="./img/socioProUploads/icons/edit-black.png" class="iconImg"></button><br><br>
				<input type="text" name="changelocation" class=" hideme" id="changelocation">
				<small class="inputErr hideme"></small>
				</div>
				<div class="inputHolder inputHolderupdateuserDetails">
				<label class="inlinelabel"><h3><img src="./img/socioProUploads/icons/android-data.png" class="iconImg">&nbsp;Date of birth</h3></label>
				<span style="float: left ; margin-top: 5px;" id="accountsettingsdateofbirth">Not updated</span>
				<button class="btneditinline" id="editdob"><img src="./img/socioProUploads/icons/edit-black.png" class="iconImg"></button><br><br>
				<input type="date" name="changedob" class=" hideme" id="changedob">
				<small class="inputErr hideme"></small>
				</div>
				
				<button type="submit" class="btnsuccess" id="saveaccountupdates">Save</button>
				<button type="submit" class="btndanger" id="cancelaccountupdates">Cancel</button>
			</form>
		</div><!--Holds update profile form-->
		<div class="uploadprofilepic">
		<div class="toholdprofilepic">
			<img src="./img/socioProUploads/profileImg/person.png" alt="Profile Picture" class="profilepic" id="profilepic">
			
		</div><!--profile image holder-->
		<div class="toholdchangeprofilepicorm"> 
			<form>
				<label>Change Profile pic</label><br><br>
				<small class="inputErr">Invalid file</small>
				<input type="file" name="">
				<button type="submit" class="btnsuccess">Update</button>
			</form>
			
		</div><!--chang profile image form holder-->
		</div>
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
<script src="./js/jquery.min.js"></script>
<script >
	$(document).ready(function(){
		$('#editname').on('click', function(){
			$('#changefullname').show();
			//alert("");
		});
			$('#edidusername').on('click', function(){
			$('#changeusername').show();
			//alert("");
		});
			$('#editemail').on('click', function(){
			$('#changeemail').show();
			//alert("");
		});
			$('#editabout').on('click', function(){
			$('#changeabout').show();
			//alert("");
		});
			$('#editlocation').on('click', function(){
			$('#changelocation').show();
			//alert("");
		});
			$('#editdob').on('click', function(){
			$('#changedob').show();
			//alert("");
		});
	});
</script>
</body>
</html>
