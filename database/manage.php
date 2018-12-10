<?php
include_once '../classes/user.php';
include_once '../classes/post.php';
if (isset($_POST['reg'])) {
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$username=$_POST['username'];
	$email=$_POST['email'];
	$pwd=$_POST['password'];
	$hashPwd=password_hash($pwd,PASSWORD_DEFAULT);
	$pathToPic="duhudh";
	echo User:: addUser($fname,$lname,$username,$email,$pwd,$pathToPic);
	exit();
}
if (isset($_POST['login'])) {
	$username=$_POST['user'];
	$password=$_POST['pwd'];
	echo User::login($username,$password);
	exit();
}
if (isset($_POST['logout'])) {
	echo User::logout();
	exit();
}
if (isset($_POST['getPost'])) {
	echo json_encode(Post::fetchposts());
	exit();
}

if (isset($_POST['newpost'])) {
	//$img=$_FILES["postfile"];
	//echo $_FILES["postfile"]["name"];
//echo 
	if (! isset($_POST['post_text']) ||  $_POST['post_text'] =="") {
		echo "Write a post fast!";
		exit;
	}
$post=new Post($_POST['whoposting'], $_POST['post_text'],"NOIMAGE");
echo $post->addpost();
exit();
}
if (isset($_POST['getusers'])) {
	
	echo json_encode(User::getallusers());
	exit();
}
if (isset($_POST['getrequests'])) {
	echo json_encode(User::getfriendrequests($_POST['sessionid']));
	exit();

}
if (isset($_POST['fetchfriendsdetails'])) {
echo json_encode(User::getsingleDetails($_POST['whoseprofileid']));
exit();
}
if (isset($_POST['alreadyrequested'])) {
	if (user::requestalreadysent($_POST['sessionid'],$_POST['useid'])) {
		echo "true";
	}else{
		echo "false";
	}
	exit();
}
if (isset($_POST['requestaleradysent'])) {
	if (user::requestalreadysent($_POST['sessionid'],$_POST['whoseprofileid'])) {
		echo "true";
	}else{
		echo "false";
	}
	exit();
}
if (isset($_POST['sendfriendrequest'])) {
echo User::sendfriendrequest($_POST['sessionid'],$_POST['sendrequestto']);
exit();
}
if (isset($_POST['arewefriends'])) {
	if (User::alreadyfriends($_POST['sessionid'],$_POST['whoseprofileid'])) {
		echo "true";
	}else{
		echo "false";
	}
	exit();
}
if (isset($_POST['accept'])) {
echo User::acceptrequest($_POST['aid'], $_POST['sessionid']);
exit();	
}
?>