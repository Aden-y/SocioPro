

$(document).ready(function(){
  var add=false;
 $('#registerform').on("submit",function() {
 // event.preventDefault();
  if ($('#fname').val()=="") {
    add=false;
    $('#fnameError').text("First name can not be empty");
    $('#fnameError').show();
  }else{
    $('#fnameError').hide();
    add=true;
  }
   if ($('#lname').val()=="") {
    add=false;
    $('#lnameError').text("Last name can not be empty");
    $('#lnameError').show();
  }else{
    $('#lnameError').hide();
    add=true;
  }

   if ($('#username').val()=="") {
    add=false;
    $('#usernameError').text("Username can not be empty");
    $('#usernameError').show();
  }else{
    $('#usernameError').hide();
    add=true;
  }
     if ($('#email').val()=="") {
    add=false;
    $('#emailError').text("Username can not be empty");
    $('#emailError').show();
  }else{
    $('#emailError').hide();
    add=true;
  }
   if ($('#password').val().length <8) {
    add=false;
    $('#pwdError').text("Password less than 8 characters not allowed!");
    $('#pwdError').show();
  }else{
    $('#pwdError').hide();
    add=true;
  }
   if ($('#cpassword').val() != $('#password').val()) {
    add=false;
    $('#pwd2Error').text("Unmatching password!");
    $('#pwd2Error').show();

  }else{
    $('#pwd2Error').hide();
   // add=true;
  }


  if (add==true) {
  ///alert('hello');
 var fname=$("#fname").val();
 var lname=$("#lname").val();
 var username=$("#username").val();
 var email=$("#email").val();
 var password=$("#password").val();
                          $.ajax({
                          	//C:\xampp\htdocs\socioPro\js\main.js
                          //  url : 'C:/xampp/htdocs/socioPro/database/manage.php',
                          url:'http://localhost/socioPro/database/manage.php',
                          method: 'post',
                          data : {reg:1,fname:fname, lname:lname,username:username,email:email,password:password},
                         //  data:{reg:1},
                            success: function(ans){
                            if (ans=="USERNAME_TAKEN") {
                            	$("#genErr").html(ans);
                            	$("#genErr").addClass("failureDiv");
                            	$("#genErr").show();

                            }else if (ans="ADDED") {

                            	$("#genErr").hide();
                            	window.location="login.html";
                            	//$("#genErrLogin").css({"background-color":"green"; "color":"white"});
                            	$("#genErrLogin").text("You were successfully registered. Now login");
                            	$("#genErrLogin").show();
                            }else{
                            	console.log(ans);
                            }
 
                            },
                            error:function(ans){
                            	console.log(ans);
                            	alert("error");
                            	ans=json.parse(ans);
                            	alert(ans);
                            	$(".warn").html(ans);
                            }
                        });

  }

});
//WORKING ON LOGIN
$("#loginForm").on("submit",function(){
 var login=false;
 if ($("#emailLogin").val()=="") 
 {
 //alert("no data");
$("#emailLoginError").html("Please enter email or username");
$("#emailLoginError").show();
login=false;
 }else{
 	$("#emailLoginError").hide();
 	login=true;
 }
 if ($("#passwordLogin").val()=="") {
    $("#passwordLoginError").html("Please enter your password");
    $("#passwordLoginError").show();
login=true;
 }else{
 	$("#passwordLoginError").hide();
 	//login=true;
 }
 if (login==true) {
 	var loginUsername=$("#emailLogin").val();
 	var loginpassword=$("#passwordLogin").val();
 	$.ajax({
 		url:'http://localhost/socioPro/database/manage.php',
        method: 'post',
       // data: {$("#loginForm").serialize()},
        data: {login:1 , loginUsername:loginUsername, loginPassword:loginpassword},
        success :function (ans){
       if (ans=="LOGGED") {
       	$("#genErrLogin").hide();
       	window.location="profile.php";
       }else if (ans=="WRONG_PASSWORD") {
       	$("#genErrLogin").text("Incorrect password");
       	$("#genErrLogin").show();
       }else if (ans=="NOT_REGISTERED") {
       	$("#genErrLogin").text("Please register first");
       	$("#genErrLogin").show();
       }else{
       	console.log(ans);
       }
        },
        error: function (ans) {
        alert("error");
        }

 	});
 }
});

//LOGOUT
$("#signoutBtn").on("click",function(){
	$.ajax({
		url:"http://localhost/socioPro/database/manage.php",
		method:"post",
		data:{logout:1},
		success: function (ans) {
		if (ans=="LOGGED_OUT") {
			window.location="login.html";
		}else{
			alert(ans);
		}
		//	alert('You clicked logout');
		},
		error: function (ans) {
			alert("Error");
		}
	});

});
});


/*





*/





