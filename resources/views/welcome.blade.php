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
			<div class="modal-dialog" role="document">
                <div class="modal-content" style="border:none; background:none;">
                  <div class="modal-header rounded shadow-sm mb-1" style="background-color: #ff7776; padding: 8px 10px;">
                    <h5 class="modal-title" style="font-size:15px; color:#fff; font-weight:bold;" id="exampleModalLabel">Connectez-vous pour accéder à la plateforme</h5>

                  </div>
                  <div class="modal-body rounded bg-white shadow-sm">
                          <form action="/sieges/create" method="post">
                              @csrf
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Identifiant</label>
                                    <input type="text" class="form-control" name="nom" aria-describedby="emailHelp" placeholder="178547924" autofocus required>
                                  </div>
                                  <div class="form-group">
                                          <label for="exampleInputEmail1">Mot de passe</label>
                                          <input type="text" class="form-control" name="ville" aria-describedby="emailHelp" placeholder="*******" required>
                                  </div>
                                  <button style="background-color:#ff7776; border-color:#ff7776; padding:5px 10px; font-size: 13px; float:right;" type="submit" class="btn btn-primary">Se connecter</button>
                                </form>
                  </div>
                </div>
              </div>
		</div>

	</div>

    </body>
</html>

<style>
    .form-control, label{
        font-size:13px;
    }
    </style>
