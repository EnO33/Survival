<div class="container">
	<div class="row">
		<form class="col s12" id="reg-form" method="post">
			<div class="row">
				<h1>Inscrivez vous</h1>
			</div>
			<div class="row">
				<div class="input-field col s6">
					<input id="psuedo" type="text" class="validate">
					<label for="psuedo">Pseudo</label>
				</div>
				<div class="input-field col s6">
					<input id="email" type="email" class="validate">
					<label for="email">Adresse mail</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<input id="password" type="password" class="validate" minlength="6">
					<label for="password">Mot de passe</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<input id="password2" type="password" class="validate" minlength="6">
					<label for="password2">Confirmation du mot de passe</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6">
					<button class="btn btn-large btn-register waves-effect waves-light" type="submit" id="register">S'inscrire
						<i class="material-icons right">done</i>
					</button>
				</div>
			</div>
		</form>
	</div>
</div>

<script type="text/javascript">
	$("#register").click(function(e) {
		e.preventDefault();

		let pseudo 		= $("#pseudo");
		let mail 		= $("#email");
		let password 	= $("#password");
		let password2 	= $("#password2");

		let errors 		= [];

		if (!(pseudo.length)) {
			errors.push("Le pseudo est vide !");
		}
		if (!(mail.length)) {
			errors.push("L'adresse email est vide !");
		}
		if (!(password.length)) {
			errors.push("Le mot de passe est vide !");
		}
		else if (!(password2.length)) {
			errors.push("La confirmation du mot de passe est vide !");
		}
		else if (password.val() != password2.val()) {
			errors.push("Les mot de passes ne correspondent pas !");
		}

		console.log(errors);

		// if (errors.length !== 0) {
		// 	$.each(errors, function(key, value) {
		// 		console.log(value);
		// 	});
		// }

	});
</script>