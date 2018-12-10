<?php
session_start();
if (!isset($_SESSION['id'])) {
	# code...
	header("Location:login.php?LOGIN_FIRST");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>ScioPro | <?php echo ($_GET['username']); ?></title>
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
				if(isset($_SESSION['username'])){?>

			<a href="logout.php"><img src="./img/socioProUploads/icons/home-black.png" class="iconImg">&nbsp;Home</a>
			<a href="logout.php"><img src="./img/socioProUploads/icons/log-out.png" class="iconImg">&nbsp;Logout</a>
			<a href="newsfeeds.php"><img src="./img/socioProUploads/icons/home-black.png" class="iconImg">&nbsp;News feeds</a>
			<a href="chats.php"><img src="./img/socioProUploads/icons/home-black.png" class="iconImg">&nbsp;Notifications</a>
			<a href="chats.php"><img src="./img/socioProUploads/icons/chatboxes.png" class="iconImg">&nbsp;Chats</a>
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
		<h2>Friend's Timeline</h2>
		<div class="timelinewrapper" style="margin: auto;">
			<div class="toholdprofilepicontimeline" style="margin: auto">
				<img src="./img/socioProUploads/profileImg/person.png" alt="Profile Picture" class="profilepicontimeline" id="profilepic">
			</div><!--to hold profile pic on timeline-->
			<div class="profiletopnav">
				<center>
				<table style="border: none;">
				<tr style="border: none;">
					<td><button class="friendsprofiletopnavbtn"><a href="#">Follow</a></button></td>
					<td><a href="#"><img src="./img/socioProUploads/post/person-stalker.png" class="iconImg" alt="icn">&nbsp;Followers&nbsp;<span>255</span></a></td>
					<td><a href="#"><img src="./img/socioProUploads/post/person-stalker.png" class="iconImg" alt="icn">&nbsp;Friends&nbsp;<span>255&nbsp;</span>(<span style="font-size: 12px">25</span>&nbsp;<span style="font-size: 12px;">&nbsp;mutual</span>)</a></td>
					<td><a href="#">Unfriend</a></td>
					<td><a href="#"><img src="./img/socioProUploads/icons/forbidden-black.png" class="iconImg" alt="icn">&nbsp;Block</a></td>
					<td><a href="#"><img src="./img/socioProUploads/icons/folder.png" class="iconImg" alt="icn">&nbsp;Photos</a></td>
					<td><a href="#"><img src="./img/socioProUploads/icons/chatbox.png" class="iconImg" alt="icn">&nbsp;Send message</a></td>
				</tr>
			</table>
				</center>
			</div>
			<div><!--holds about friends--> 
			<div class="inputHolder inputHolderupdateuserDetails">
				<label class="inlinelabel"><h3><img src="./img/socioProUploads/icons/user-black.png" class="iconImg">&nbsp;Name</h3></label>

				<label id="friendsfullname">Joakim Adeny</label>
			
				</div>
				<div class="inputHolder inputHolderupdateuserDetails">
				<label class="inlinelabel"><h3><img src="./img/socioProUploads/icons/user-black.png" class="iconImg">Username&nbsp;</h3></label>
				<label id="friendsusername">Kis156</label>

				</div>
				<div class="inputHolder inputHolderupdateuserDetails">
				<label class="inlinelabel"><h3><img src="./img/socioProUploads/icons/user-black.png" class="iconImg">&nbsp;Email</h3></label>
				<label id="friendsemail">kim@gmail.com</label>
				<br>
				</div>
				<div class="inputHolder inputHolderupdateuserDetails">
				<label class="inlinelabel"><h3><img src="./img/socioProUploads/icons/user-black.png" class="iconImg">&nbsp;About</h3></label>
				<p id="friendsabout">
					Students and instructors of today have increasing demands on their time and money. Pearson
					has responded to that need by offering digital texts and course materials online
					through CourseSmart. CourseSmart allows faculty to review course materials online, saving
					time and costs. It offers students a high-quality digital version of the text for less than
					the cost of a print copy of the text. Students receive the same content offered in the print
					textbook enhanced by search, note-taking, and printing tools. For more information, visit
					www.coursesmart.com.
				</p>

				</div>
					<div class="inputHolder inputHolderupdateuserDetails">
				<label class="inlinelabel"><h3><img src="./img/socioProUploads/icons/location.png" class="iconImg">&nbsp;Schooling</h3></label>
				<table>
					<tr>
						<th>Institution</th>
						<th>Level</th>
						<th>Years</th>
					</tr>
					<tr>
						<td>Bunde Primary School</td>
						<td>Primary</td>
						<td>2006-2009</td>
					</tr>

				</table>
				<br>
				</div>
				<div class="inputHolder inputHolderupdateuserDetails">
				<label class="inlinelabel"><h3><img src="./img/socioProUploads/icons/location-black.png" class="iconImg" id="">&nbsp;Location</h3></label>
				<span style="float: left;  margin-top: 5px;" id="friendslocation">Not updated</span>
				<br><br>
				</div>
				<div class="inputHolder inputHolderupdateuserDetails">
				<label class="inlinelabel"><h3><img src="./img/socioProUploads/icons/android-data.png" class="iconImg">&nbsp;Date of birth</h3></label>
				<span style="float: left ; margin-top: 5px;" id="friendsdob">Not updated</span>
				</div>
				<br>
			</div> <!--holds about friends--> 

			<div class="toholdtimelineevents">
				<label style="margin-top:25px; display: block;"><h3 style="margin-bottom:25px;">Friend's Posts</h3></label>
				<div class="singleeventdiv">
					<label><b>Joakim Adeny</b></label>
					<small class="postdateholder"><?php echo date("Y-d-m");?></small>

					<p>
					However, the compiler will give an error in such a situation (stating that specialization comes after
					instantiation). Incidentally, it can happen that a generic class template explicitly “mentions” a special case, as
					a parameter in some member function. The following code in fact causes the aforementioned compiler error.
					</p>
					<div class="postimageholder">
						<img src="./img/socioProUploads/post/photo1.png" class="postimage">
					</div>
					<textarea class="commenttextarea" cols="80" placeholder="Write a comment"></textarea>
					<small style="padding-bottom: 5px;"><button class="btncoment"><img src="./img/socioProUploads/icons/comment-black.png" class="iconImg"></button><img src="./img/socioProUploads/icons/bars-black.png" alt="Options" class="optionsicon" id="optionsicon"></small>
					<br>
					<small><button class="btnlike"><img src="./img/socioProUploads/icons/thumbs_up.gif" class="iconImg">Like</button><a href="#" class="likers"><span>25</span>&nbsp;likes</a></small>
					<small style="margin-left: 20"><a href="#"><img src="./img/socioProUploads/icons/comment-black.png" class="iconImg">&nbsp;<span>25</span></a></small>
				</div>

						<div class="singleeventdiv">
					<label><b>Joakim Adeny</b></label>
					<small class="postdateholder"><?php echo date("Y-d-m");?></small>
					<p>
					However, the compiler will give an error .
					</p>
						<div class="postimageholder">
						<img src="./img/socioProUploads/post/photo1.png" class="postimage">
					</div>
					<textarea class="commenttextarea" cols="80" placeholder="Write a comment"></textarea>
					<small style="padding-bottom: 5px;"><button class="btncoment"><img src="./img/socioProUploads/icons/comment-black.png" class="iconImg"></button><img src="./img/socioProUploads/icons/bars-black.png" alt="Options" class="optionsicon" id="optionsicon"></small>
					<br>
					<small><button class="btnlike"><img src="./img/socioProUploads/icons/thumbs_up.gif" class="iconImg">Like</button><a href="#" class="likers"><span>25</span>&nbsp;likes</a></small>
					<small style="margin-left: 20"><a href="#"><img src="./img/socioProUploads/icons/comment-black.png" class="iconImg">&nbsp;<span>25</span></a></small>
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
		<a href="#">TOS</a>
		</ul>
		</div><!--Links-->

	</div><!--footer Wrapper-->
</footer>
<script src="./js/jquery.min.js"></script>
<script>
	//Custom js
	$(document).ready(function(){
		var sessionid="<?php echo($_SESSION['id']);?>";
		var whoseprofileid="<?php echo($_GET['id']);?>";
		$.ajax({
			url: 'http://localhost/sociopro/database/manage.php',
			method: 'post',
			data:{fetchfriendsdetails:1,whoseprofileid:whoseprofileid},
			success:function(response){
			//	alert(response);
			var friend=JSON.parse(response);
			$('#friendsfullname').text(friend['fname']+"  "+friend['lname']);
			$('#friendsusername').text(friend['username']);
			$('#friendsemail').text(friend['email']);
			$('#friendsabout').text(friend['about']);
			$('#friendslocation').text(friend['location']);
			$('#friendsdob').text(friend['dob']);

			},
			error:function(response){
				alert('error');
			}
		});
		//sssarewefriends();
		function arewefriends(){
			$.ajax({
				url:'http://localhost/sociopro/database/manage.php',
				method:'post',
				data:{arewefriends:1,sessionid:sessionid,whoseprofileid:whoseprofileid},
				success:function(response){
					alert(response);
				},
				error:function(response){
					alert('error');
					console.log(response);
				}
			});
		}
		function requestaleradysent(){
				$.ajax({
				url:'http://localhost/sociopro/database/manage.php',
				method:'post',
				data:{requestaleradysent:1,sessionid:sessionid,whoseprofileid:whoseprofileid},
				success:function(response){
					alert(response);
				},
				error:function(response){
					alert('error');
					console.log(response);
				}
			});
		}
	});
</script>
</body>
</html>
