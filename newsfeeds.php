<?php
session_start();
if (!isset($_SESSION['id'])) {
	header("Location:login.php?msg=login first");
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
		<h2>News Feeds</h2>
		<div>
		<form id="postform" enctype="multipart/form-data" method="post" onsubmit="return false">
			<input type="number" name="whoposting" hidden value="<?php echo $_SESSION['id'];?>">
		<textarea cols="100" rows="6" class="posttextarea"placeholder="Whats on your mind?" name="post_text"></textarea>
		<input type="file" name="postfile">
		<button class="btnpost" id="postbtn">Post</button>
			
		</form>
		</div >

		<div id="holdposts">
		<hr style="border: solid 2px black; margin-bottom: 20px;">
		<div class="postdisplay">
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
		fetchposts();
		function fetchposts(){
			$.ajax({
				url:'http://localhost/sociopro/database/manage.php',
				method:'post',
				// m dataType:'json',
				data:{getPost:1},

				success:function (response){
					//alert(response);
					//alert(response[0].post_text);
				var posts=JSON.parse(response);
				//alert(posts);
				console.log(posts);
				$.each(posts, function(index){
					

				$('#holdposts').append('<hr style="border: solid 2px black; margin-bottom: 20px;"><div class="postdisplay"><label><b style="text-align: center;"><img src="./img/socioProUploads/profileImg/person.png" class="posterimage">'+posts[index].username+'</b></label><small class="postdateholder">'+posts[index].post_date+'</small> <p>'+posts[index].post_text+'</p><br><small><button class="btnlike"><img src="./img/socioProUploads/icons/thumbs_up.gif" class="iconImg">Like</button><a href="#" class="likers"><span>25</span>&nbsp;likes</a></small></div>');

				}); 
				},
				error: function(response){
					console.log(response);
					alert("error");
				}
			});
		}
		$('#postform').on('submit',function () {
			newpost();
		});
		

		function newpost() {
			//var file=$('#postfile').files;
		// var data=new FormData($('#postform'));
			//var data=1;
		//	alert(file);
			var post_text=$('#post_text').val();
			$.ajax({
				url:'http://localhost/sociopro/database/manage.php',
				method:'post',
				//data: {newpost:1,file:file,post_text:post_text},
				//data:{data:data,newpost:1},
				data:
				$('#postform').serialize() + "&newpost=1"
				,
				success:function (response) {
					alert(response);
					fetchposts();
					$('#postform').reset();
				},
				error:function (response) {
					alert('error');
				}

			});
		}


	});

</script>
</body>
</html>
