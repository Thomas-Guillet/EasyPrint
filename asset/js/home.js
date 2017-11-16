$(document).ready(function() {
	$('#signin-email').click(() => {

		$('#signin-email').html('<i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span>');

		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

		var stateMail = false;
		var statePassword = false;

		var mail = $('#user-email').val();
		var password = $('#user-password').val();

		if(mail == null || mail == ''){
			alert('mail');
			$('#signin-email').html('SIGN UP');
		}else if(!emailReg.test(mail)) {
			alert('adresse type');
			$('#signin-email').html('SIGN UP');
		}else{
			stateMail = true;
		}

		if(password == null || password == ''){
			alert('pass');
			$('#signin-email').html('SIGN UP');
		}else if(password.length < 5) {
			alert('pass length');
			$('#signin-email').html('SIGN UP');
		}else{
			statePassword = true;
		}

		if(stateMail == true && statePassword == true){
			var dataObject = {
				mail: mail,
				password: password,
			};
			$.ajax({
				method: 'post',
				url: $('#ajax').val()+'checkUserSignUp.php',
				data : dataObject,
				success: function(data) {
					var result = $.parseJSON(data);
					if(result['state'] == false){
						$('#signin-email').html('SIGN UP');
					}
				}
			});
		}




	});
});