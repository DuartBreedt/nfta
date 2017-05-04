$(document).ready(function(){

	$("#loginForm input[type=submit]").click(login);
	$("#registerForm input[type='submit']").click(register);
	$("#logout").click(logout);

});

function login () {
	var emailVar = $("#log-email").val();
	var passwordVar = $("#log-password").val();

	$.post( "login.php", { email: emailVar, password: passwordVar })
		.done(function(data) {
			if(data == null || data == "") location.reload();
			$(".message-box-container").html(data);
		});

	return false;
}

function register () {
	var firstnameVar = $("#firstname").val();
	var lastnameVar = $("#lastname").val();
	var emailVar = $("#reg-email").val();
	var cellVar = $("#cell").val();
	var clubVar = $("#club").val();
	var passwordVar = $("#reg-password").val();
	var confirmPasswordVar = $("#confirm-password").val();

	$.post( "register.php", { firstname: firstnameVar, lastname: lastnameVar, email: emailVar, cell: cellVar, club: clubVar, password: passwordVar })
		.done(function(data) {
			if(data == null || data == "") window.location = "profile.php";
			$(".message-box-container").html(data);
		});

	return false;
}

function logout () {
	$.post( "logout.php")
		.done(function() {
			location.reload();
		});

	return false;
}
