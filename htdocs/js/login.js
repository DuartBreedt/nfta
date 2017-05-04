$(document).ready(function(){

	$("#loginForm input[type='submit']").click(login);

});

function login () {
	var emailVar = $("#log-email").val();
	var passwordVar = $("#log-password").val();

	$.post( "login.php", { email: emailVar, password: passwordVar })
		.done(function(data) {
			// if(data == null || data == "") location.reload();
			$(".message-box-container").html(data);
		});

	return false;
}
