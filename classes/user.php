<?php 
include_once('../database/DBcon.php');
session_start();
//current file C:\xampp\htdocs\socioPro\classes\user.php
/**
 * 
 */
class User 
{
	
private static function userExists($username, $email){
	$db=new DBcon();
	$sql="SELECT * FROM socioPro.users WHERE email=? OR username=?";
	$pre=$db->connect()->prepare($sql);
	$pre->execute([$email,$username]);
	$rows=$pre->rowCount();
	if ($rows>0) {
		return true;
	}else{
		return false;
	}

}

public static function addUser($fname,$lname,$username,$email,$pwd,$pathToPic){
if (!User::userExists($username,$email)) {
	$db=new DBcon();
	$date=date("Y-m-d H:i:s");
	$hashed=password_hash($pwd,PASSWORD_DEFAULT);
	$sql="INSERT INTO sociopro.users (fname, lname, username, email, pwd, ppic, rdate,llogin) VALUES (?,?,?,?,?,?,?,?)";
    $pre=$db->connect()->prepare($sql);
	$pre->execute([$fname,$lname,$username,$email,$hashed,$pathToPic,$date,$date]);
	return"ADDED";
}else{
	return "USERNAME_TAKEN";
}

}

public static function login($username, $password){
	if (User::userExists($username,$username)) {
		$db=new DBcon();
		$sql="SELECT * FROM socioPro.users WHERE email=? OR username=?";
	    $pre=$db->connect()->prepare($sql);
     	$pre->execute([$username,$username]);
     	$row=$pre->fetch(PDO::FETCH_ASSOC);
     	$verifypass=password_verify($password,$row['pwd']);
		if ($verifypass){
		//session_start();
		$_SESSION['username']=$row['username'];
		$_SESSION['fname']=$row['fname'];
		$_SESSION['lname']=$row['lname'];
		$_SESSION['email']=$row['email'];
		$_SESSION['id']=$row['id'];
		$lastLogin=date("Y-m-d H:i:s");
		$update="UPDATE socioPro.users SET llogin=? WHERE username=?";
		$pre1=$db->connect()->prepare($update);
		$pre1->execute([$lastLogin,$_SESSION['username']]);
		return "LOGGED";
		}else{
		return "WRONG_PASSWORD";

		}

		
	}else{
		return "NOT_REGISTERED";

	}

}
public static function logout(){
	if (isset($_SESSION['id'])) {
		session_destroy();
		return "LOGGED_OUT";
	}else{
		return "NOT_LOGGED";
	}
}
public static function getsingleDetails($id){
	$con=new DBcon();
	$sql="SELECT * from sociopro.users where id=?";
	$pre=$con->connect()->prepare($sql);
	$pre->execute([$id]);
	if ($pre->rowCount()>0) {
		return $pre->fetch(PDO::FETCH_ASSOC);
	}else{
		return "NOTHING";
	}
}
public static function getallusers()

{
	$con=new DBcon();
	$sql="SELECT * from sociopro.users";
	$pre=$con->connect()->prepare($sql);
	$pre->execute([]);
	$count=$pre->rowCount();
	$rows=array();
	if ($count>0) {
		$i=0;
	while ($row=$pre->fetch(PDO::FETCH_ASSOC)) {
		$rows[$i]=$row;
		$i++;
	}
	}
	return $rows;
}
public static function alreadyfriends($id1,$id2){
	$con=new DBcon();
	$sql="SELECT * from sociopro.friends where id_user=? and id_friend=? or id_user=? and id_friend=?"; 
	$pre=$con->connect()->prepare($sql);
	$pre->execute([$id1,$id2,$id2,$id1]);
	$rows=$pre->rowCount();
	if ($rows>0) {
		return true;
	}else{
		return false;
	}
}
public static function requestalreadysent($sender, $reciever){
	$con=new DBcon();
	$sql="SELECT * from sociopro.friendrequests where requester=? and requested =? or requester=? and requested=?";
	$pre=$con->connect()->prepare($sql);
	$pre->execute([$sender,$reciever,$reciever,$sender]);
	if ($pre->rowCount()>0) {
		return true;
	}else{
		return false;
	}
}
public static function sendfriendrequest($sender,$reciever){
if (!User::requestalreadysent($sender,$reciever)) {
	$con=new DBcon();
	$sending_date=date("Y-m-d h:m:s");
	$sql="INSERT INTO sociopro.friendrequests(`requester`, `requested`, `request_date`) VALUES (?,?,?)";
	$pre=$con->connect()->prepare($sql);
	$pre->execute([$sender,$reciever,$sending_date]);
	return "Request sent";
}else{
	return "Pending request unresponded to";
}
}
public static function acceptrequest($sender, $reciever){
	$con=new DBcon();
	$sql="INSERT INTO sociopro.friends(`id_user`, `id_friend`, `friends_since`) VALUES (?,?,?)";
	$pre= $con->connect()->prepare($sql);
	$pre->execute([$reciever,$sender,date("Y-m-d h:m:s")]);
	//Just make it work both ways!
	$sql1="INSERT INTO sociopro.friends(`id_user`, `id_friend`, `friends_since`) VALUES (?,?,?)";
	$pre1= $con->connect()->prepare($sql1);
	$pre->execute([$sender,$reciever,date("Y-m-d h:m:s")]);

	//now delete the request
	$sql2="DELETE from sociopro.friendrequests where requester=? and requested=? or requester=? and requested=?";
	$pre2= $con->connect()->prepare($sql2);
	$pre2->execute([$sender, $reciever,$reciever,$sender]);
	return "REQUEST_ACCEPTED";

}
public static function getfriendrequests($id){
	$con=new DBcon();
	$sql="SELECT * from sociopro.friendrequests INNER JOIN sociopro.users on friendrequests.requester=users.id WHERE requested=?";
	$pre=$con->connect()->prepare($sql);
	$pre->execute([$id]);
	$count=$pre->rowCount();
	$rows=array();
	if ($count>0) {
		$i=0;
		while ($row=$pre->fetch(PDO::FETCH_ASSOC)) {
			$rows[$i]=$row;
			$i++;

		}
	}
	return $rows;
}
public static function currentuser(){
//	$sql="SELECT ";
}
public static function getmyfriends($myid){
	$con=new DBcon();
	$sql="SELECT * FROM sociopro.friends inner join sociopro.users on friends.id_friend=users.id where friends.id_user=?";
	$pre=$con->connect()->prepare($sql);
	$pre->execute([$myid]);
	$count=$pre->rowCount();
	$i;
	$rows=array();
	if ($count>0) {
		while($row=$pre->fetch(PDO::FETCH_ASSOC)){
			$rows[$i]=$row;
			$i++;
		}
		return $rows;
	}else{
		return "No_FRIENDS";
	}
}
public static function numberoffriends($myid){
	$con=new DBcon();
	$sql="SELECT * from sociopro.friends where id_user=?";
	$pre=$con->connect()->prepare($sql);
	$pre->execute([$myid]);
	return $pre->rowCount();

}
public static function numberoffollowers($myid){
	$con=new DBcon();
	$sql="SELECT * from sociopro.followers where followed=?";
	$pre=$con->connect()->prepare($sql);
	$pre->execute([$myid]);
	return $pre->rowCount();

}
public static function numberoffollowing($myid){
	$con=new DBcon();
	$sql="SELECT * from sociopro.followers where follower=?";
	$pre=$con->connect()->prepare($sql);
	$pre->execute([$myid]);
	return $pre->rowCount();

}
public static function getmutualfriends($specify, $myid, $id){
	//$sql="SELECT * FROM sociopro.friends inner join socioPro.users on friends.id_friend=users.id where fri";
}
/*
//PDOCon::connect();
$con=new Db_Connect();
$date=date("Y-m-d H:i:s");
$con->exceuteQry("INSERT INTO sociopro.users('\'\,:fname, :lname, :username, :email, :pwd, :ppic, :rdate, :llogin ) VALUES (?,?,?,?,?,?,?,?)", array(':fname'=>'Joakim', ':lname'=>'Adeny', ':username'=>'kimmie16',':email'=>'admin@gmail.com', ':pwd'=>'kim', ':ppic'=>'kjkjjkj', ':rdate'=>'2018-08-25 00:00:00', ':llogin'=>'2018-08-25 00:00:00'));
*/
}
 ?>