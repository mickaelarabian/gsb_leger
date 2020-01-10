<!DOCTYPE html>
<html style="height:100%" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login | GSB</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body style="background: no-repeat url('http://localhost:8000/back.svg'); background-size:cover; background-position:right">
	<div class="container pt-5">
        <h1 style="color:#fff;"><b>G</b>estionnaire de <b>S</b>ervices et <b>B</b>udgets</h1>
        <p class="text-white font-italic">Galaxy Swiss Bourdin</p>
        <div class="row">
        <div class="col-8">
            <img src="http://localhost:8000/illu.png" alt="">
        </div>
		<div class="col-4 mt-5 pt-5" style="margin:auto;">
			<div class="modal-dialog" role="document">
                <div class="modal-content" style="border:none; background:none;">
                  <div class="mb-1 text-center">
                    <h3 class="modal-title" style="color:#fff;" id="exampleModalLabel">Connectez-vous</h3>

                  </div>
                  <div class="modal-body rounded bg-white shadow-sm">
                          <form action="/login" method="post">
                              @csrf
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Adresse mail</label>
                                    <input type="text" class="form-control" name="email" aria-describedby="emailHelp" placeholder="exemple@gmail.com" autofocus required>
                                  </div>
                                  <div class="form-group">
                                          <label for="exampleInputEmail1">Mot de passe</label>
                                          <input type="password" class="form-control" name="password" aria-describedby="emailHelp" placeholder="*******" required>
                                  </div>
                                  <button style="background-color:#6b5aed; border-color:#6b5aed; padding:5px 10px; font-size: 13px; float:right; width:100%;" type="submit" class="btn btn-primary">Se connecter</button>
                                </form>
                  </div>
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
