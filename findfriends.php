<?php
session_start();
if (!isset($_SESSION['id'])) {
	# code...
	header('Location:login.php?LOGIN_FIRST');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ScioPro | Find friends</title>
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
		<h2>Find friends</h2>
		<div class="holdpeople">
			<div class="singleperson">
				<table id="friendrequests">
					
				</table>
				<label><h3>People you may know</h3></label>
				<table id="findfriendstable">
				<!--	<tr class="singlepersontr">
						<td style="margin: 0px;padding: 0px;">
						<img src="./img/socioProUploads/profileImg/avatar.png"class="posterimage">
						</td>
						<td style="color: #00cc99;">
							<a href="#">Joakim Adeny</a><br>
							<a href="#" style="font-size: 12px;color: black;text-decoration: none;"><span>56</span>&nbsp;Mutual friends</a>
						</td>
						<td><button class="acceptfriend"><img src="./img/socioProUploads/icons/person-add.png"class="iconImg">&nbsp;Accept</button></td>
						<td><button class="Cancelfriend"><img src="./img/socioProUploads/icons/trash-b.png"class="iconImg">&nbsp;Cancel</button></td>
					</tr>
					<tr class="singlepersontr">
						<td style="margin: 0px;padding: 0px;">
						<img src="./img/socioProUploads/profileImg/avatar.png"class="posterimage">
						</td>
						<td style="color: #00cc99;">
							<a href="#">Joakim Adeny</a><br>
							<a href="#" style="font-size: 12px;color: black;text-decoration: none;"><span>56</span>&nbsp;Mutual friends</a>
						</td>
						<td><button class="acceptfriend"><img src="./img/socioProUploads/icons/person-add.png"class="iconImg">&nbsp;Add friend</button></td>
						<td><button class="Cancelfriend"><img src="./img/socioProUploads/icons/delete-black.png"class="iconImg">&nbsp;Remove</button></td>
					</tr>
						<tr class="singlepersontr">
						<td style="margin: 0px;padding: 0px;">
						<img src="./img/socioProUploads/profileImg/avatar.png"class="posterimage">
						</td>
						<td style="color: #00cc99;">
							<a href="#">Joakim Adeny</a><br>
							<a href="#" style="font-size: 12px;color: black;text-decoration: none;"><span>56</span>&nbsp;Mutual friends</a>
						</td>
						<td><button class="requestsentbtn"><img src="./img/socioProUploads/icons/ios7-checkmark-outline.png"class="iconImg">&nbsp;Request sent</button></td>
						<td><button class="withdrawrequestbtn"><img src="./img/socioProUploads/icons/delete-black.png"class="iconImg">&nbsp;Cancel request</button></td>
					</tr>
								<tr class="singlepersontr">
						<td style="margin: 0px;padding: 0px;">
						<img src="./img/socioProUploads/profileImg/avatar.png"class="posterimage">
						</td>
						<td style="color: #00cc99;">
							<a href="#">Joakim Adeny</a><br>
							<a href="#" style="font-size: 12px;color: black;text-decoration: none;"><span>56</span>&nbsp;Mutual friends</a>
						</td>
						<td>
							<small style="color: #009933">You are now friends!</small>
						</td>
					</tr>-->
				</table>

			</div>
		</div><!--hol people-->
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
	$(document).ready(function () {
		getfriendrequests();
		getusers();
		var sessionid="<?php echo($_SESSION['id']);?>";
		
		function getusers() {
			$('#findfriendstable').empty();

				$.ajax({
				url:'http://localhost/sociopro/database/manage.php',
				method:'post',
				data : {getusers:1},
				success: function (response) {
					//alert(response);
					var users=JSON.parse(response);
					
						$.each(users,function (index) {
							//make sure its not me!
							if (users[index].id !=sessionid) {
						
								//see if we are already friends
			var who=users[index].id;
			$.ajax({
				url:'http://localhost/sociopro/database/manage.php',
				method:'post',
				data:{arewefriends:1,whoseprofileid:who,sessionid:sessionid},
				success:function(response){
					//alert("checking if we are already friends");
					//alert(response);

				if (response=="true") {
					//alert("we are friends");

				}else if(response=="false"){
					//alert("We are not friends");
				//now see if a friend request has already been sent
				var useid=who;
				$.ajax({
				url:'http://localhost/sociopro/database/manage.php',
				method:'post',
				data:{alreadyrequested:1,sessionid:sessionid,useid:useid},
				success:function(response){
					//alert("checking if simeone has sent request");
					//alert(response);
				if (response=="true") {

					//alert("request already sent");
				}else if(response=="false"){
					//now send request
				//	alert("request not sent");
				
					$('#findfriendstable').append('<tr class="singlepersontr"><td style="margin: 0px;padding: 0px;"><img src="./img/socioProUploads/profileImg/avatar.png"class="posterimage"></td><td style="color: #00cc99;"><a href="friendsprofile.php?id='+users[index].id+'&username='+users[index].username+'">'+users[index].fname+'  '+users[index].lname+'</a><br><a href="#" style="font-size: 12px;color: black;text-decoration: none;"><span>56</span>&nbsp;Mutual friends</a></td><td><input type="text" hidden fid="friendsid"><button class="acceptfriend sendrqst" rid="'+users[index].id+'"><img src="./img/socioProUploads/icons/person-add.png" class="iconImg">&nbsp;Send friend request</button></td><td><button class="Cancelfriend"><img src="./img/socioProUploads/icons/trash-b.png"class="iconImg">&nbsp;Remove</button></td></tr>');
				
				}else{
					alert(response);
				}
				},
				error:function(response){
					alert('error');
					console.log(response);
				}
			});
			
				}else{
					alert(response);
				}
				
				},
				error:function (response) {
					console.log(response);
					alert("error");
				
				}
			});

					}
					});
					
				},
				error : function(response){
					alert('error');
				}
			});

		}


		function getfriendrequests(){
			$('#friendrequests').empty();
			var myid="<?php echo($_SESSION['id']);?>";
			$.ajax({
				url:'http://localhost/sociopro/database/manage.php',
				method:'post',
				data:{getrequests:1,sessionid:myid},
				success:function(response){
					//alert(response);
					var friendrequests=JSON.parse(response);
					$.each(friendrequests,function(index){
					$('#friendrequests').append('<tr class="singlepersontr"><td style="margin: 0px;padding: 0px;"><img src="./img/socioProUploads/profileImg/avatar.png"class="posterimage"></td><td style="color: #00cc99;"><a href="friendsprofile.php?id='+friendrequests[index].id+'&username='+friendrequests[index].username+'">'+friendrequests[index].fname+'  '+friendrequests[index].lname+'</a><br><a href="#" style="font-size: 12px;color: black;text-decoration: none;"><span>56</span>&nbsp;Mutual friends</a></td><td><button class="acceptfriend accept" aid="'+friendrequests[index].id+'"><img src="./img/socioProUploads/icons/person-add.png"class="iconImg">&nbsp;Accept</button></td><td><button class="Cancelfriend"><img src="./img/socioProUploads/icons/trash-b.png"class="iconImg">&nbsp;Cancel</button></td></tr>');
					});
				},
				error:function(response){
					alert('error');
				}
			});
		}
		//now send friend request
			$("body").delegate(".sendrqst", "click",function(){
				var sendrequestto=$(this).attr("rid");
			//	alert(sendrequestto);
			$.ajax({
				url:'http://localhost/sociopro/database/manage.php',
				method:'post',
				data:{sendfriendrequest:1,sessionid:sessionid, sendrequestto:sendrequestto},
				success:function(response){
					alert(response);
					getfriendrequests();
					getusers();
				},
				error:function(response){
					alert('error');
					console.log(response);
				}
			});
			});
			//accep friend request
			$("body").delegate(".accept","click",function(){
				var aid=$(this).attr("aid");
				$.ajax({
					url:'http://localhost/sociopro/database/manage.php',
					method:'post',
					data:{accept:1,aid:aid,sessionid:sessionid},
					success:function(response){
						alert(response);
						getfriendrequests();

					},
					error:function(response){
						console.log(response);
						alert("error");
					}
				});
			});


	});
</script>
</body>
</html>
