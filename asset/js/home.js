$(document).ready(function() {
	$('#signin-email').click(() => {

		$('#signin-email').html('<i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span>');

		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

		var stateMail = false;
		var statePassword = false;

		var mail = $('#user-email').val();
		var password = $('#user-password').val();

		if(mail == null || mail == ''){
			toastr.error('Veuillez entrer un email');
			$('#signin-email').html('SIGN UP');
		}else if(!emailReg.test(mail)) {
			toastr.error('Cette adresse email n\'est pas valide');
			$('#signin-email').html('SIGN UP');
		}else{
			stateMail = true;
		}

		if(password == null || password == ''){
			toastr.error('Veuillez entrer un mot de passe');
			$('#signin-email').html('SIGN UP');
		}else if(password.length < 5) {
			toastr.error('Votre mot de passe doit contenir plus de 5 caractères');
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
						if(result['err'] == 'mail'){
							$('#signin-email').html('SIGN UP');
							toastr.error('Cette adresse email est déjà utilisée');
						}else{
							$('#signin-email').html('SIGN UP');
							toastr.error('Une erreur s\'produite, veuillez ré-essayer');
						}
					}else if(result['state'] == true){
						sHtml = '';
						sHtml += '<form>';
						sHtml += '<input type="text" id="user-username" placeholder="Your username" />';
						sHtml += '<input type="text" id="user-firstname" placeholder="Your firstname" />';
						sHtml += '<input type="text" id="user-lastname" placeholder="Your lastname" />';
						sHtml += '<button type="button" id="signup-account">CREATE ACCOUNT</button>';
						sHtml += '</form>';

						$('#content-modal-sign-up').hide(500);
						setTimeout(function(){
							$('#content-modal-sign-up').html(sHtml);
						}, 500);
							$('#content-modal-sign-up').show(500);

					}
				}
			});
		}




	});
});