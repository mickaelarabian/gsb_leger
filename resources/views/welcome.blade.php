<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
	<div class="container pt-5">
		<div class="col-6" style="margin:auto;">
			<div class="card bg-light mb-3 shadow-sm p-3 mb-5 rounded border-0">
				<div class="card-body">
					<h3><b>Connectez-vous pour accéder à la plateforme</b></h3>
				</div>
				<div class="card-body">
					<form method="post" action="/user/login">
						<div class="form-group">
							<label for="exampleInputEmail1">Identifiant</label>
							<input type="text" class="form-control" name="login" aria-describedby="emailHelp" placeholder="785458628858" autofocus required>
							<small id="emailHelp" class="form-text text-muted">We'll never share your login with anyone else.</small>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Mot de passe</label>
							<input type="password" class="form-control" name="password" placeholder="********" required>
						</div>
						<button type="submit" class="btn btn-primary">Accéder à la plateforme</button>
					</form>
				</div>
			</div>
		</div>

	</div>

    </body>
</html>
