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
						$('#signin-email').html('SIGN UP');
						toastr.error('Une erreur s\'produite, veuillez ré-essayer');
					}else if(result['state'] == true){
						if(result['session'] == 'new'){
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

								$('#signup-account').click(() => {
									stateSignUp = true;
									var sUserMail = result['mail'];
									var sUsername = $('#user-username').val();
									var sFirstname = $('#user-firstname').val();
									var sLastname = $('#user-lastname').val();
									if(sUsername == null || sUsername == ''){
										toastr.error('Veuillez entrer un Username');
										stateSignUp = false;
									}
									if(sFirstname == null || sFirstname == ''){
										toastr.error('Veuillez entrer un Firstname');
										stateSignUp = false;
									}
									if(sLastname == null || sLastname == ''){
										toastr.error('Veuillez entrer un Lastname');
										stateSignUp = false;
									}

									if(stateSignUp){
									$('#signup-account').html('<i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span>');
										var dataObject = {
											sUsername: sUsername,
											sFirstname: sFirstname,
											sLastname: sLastname,
											sUserMail: sUserMail,
										};
										$.ajax({
											method: 'post',
											url: $('#ajax').val()+'checkUserInformation.php',
											data : dataObject,
											success: function(data) {
												if(data == 'success'){
													location.reload();
												}else{
													$('#signup-account').html('CREATE ACCOUNT');
												}
											}
										});
									}
								});
							}, 500);
							$('#content-modal-sign-up').show(500);
						}else{
							var dataObject = {
								mail: mail,
								password: password,
							};
							$.ajax({
								method: 'post',
								url: $('#ajax').val()+'checkUserPassword.php',
								data : dataObject,
								success: function(data) {
									if(data == true){
										toastr.success('Connecté');
										setTimeout(function(){
											location.reload();
										}, 1500);
									}else{
										toastr.error('Wrong password');
										$('#signin-email').html('SIGN UP');
									}
								}
							});
						}
					}
				}
			});
		}
	});
});