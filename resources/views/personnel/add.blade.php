<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <body style="background-color:#f9f9f9; font-size:.875rem">
            <nav class="navbar navbar-expand-lg navbar-light bg-wight shadow-sm bg-white">
                <div class="row" style="width: 100%">
                <div class="col-2">

                </div>
                <div class="col-10">
                    <div class="collapse navbar-collapse float-right" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="/user/login"><i class="fas fa-user-shield"></i> Mickaël</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="/user/logout"><i class="fas fa-sign-out-alt"></i></a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
                </nav>
                <div class="row">
                        <div class="col-2" style="position: absolute; top: 0; height: 100%">
                            @include('/include/menu')
                        </div>
                        <div class="col-10" style="position: absolute; right:0;">
                            <nav aria-label="breadcrumb" style="width: 40%; margin-top: 25px">
                                <ol class="breadcrumb row" style="padding: 2px 10px; background:none; font-size:13px">
                                    <li class="breadcrumb-item"><a style="color: #ff7776;" href="/"><i class="fas fa-home"></i> Dashboard</a></li>
                                    <li class="breadcrumb-item"><a style="color: #ff7776;" href="/personnels">Personnels</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Ajouter</li>
                                </ol>
                            </nav>
                              <div data-toggle="modal" data-target="#exampleModal" style="position:absolute; top:15px; right: 40px;">
                                <a class="shadow-sm" style="font-size: 13px; padding: 5px 15px; color: #fff; background-color: #ff7776; border-radius: 25px;" class="row" href="/personnels">Retourner à la liste <i style="font-size: 13px; padding-top:5px; padding-left:5px;" class="fas fa-undo"></i></a>
                            </div>
                            <div class="pt-1 pr-5" style="margin:0px">
                        <section class="row">
                                <div class="container">
                                        <div class="row">
                                            <div class="col-6 mt-1" style="margin: auto;">
                                                    <div class="modal-dialog shadow-sm" role="document">
                                                            <div class="modal-content" style="border:none">
                                                              <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Ajouter un personnel</h5>

                                                              </div>
                                                              <div class="modal-body">
                                                                      <form action="/personnels/create" method="post">
                                                                          @csrf
                                                                              <div class="form-group">
                                                                                <label for="exampleInputEmail1">Nom</label>
                                                                                <input type="text" class="form-control" name="nom" aria-describedby="emailHelp" placeholder="Arabian" required>
                                                                              </div>
                                                                              <div class="form-group">
                                                                                      <label for="exampleInputEmail1">Prénom</label>
                                                                                      <input type="text" class="form-control" name="prenom" aria-describedby="emailHelp" placeholder="Mickaël" required>
                                                                              </div>
                                                                              <div class="form-group">
                                                                                <select class="custom-select" name="status" required>
                                                                                  <option value="">Choisir un status</option>
                                                                                  <option value="Responsable">Responsable</option>
                                                                                  <option value="Chercheur">Chercheur</option>
                                                                                  <option value="Commercial">Commercial</option>
                                                                                  <option value="Stagiaire">Stagiaire</option>
                                                                                  <option value="Administrateur">Administrateur</option>
                                                                                </select>
                                                                              </div>
                                                                              <div class="form-group">
                                                                                  <label for="exampleInputEmail1">Date de naissance</label>
                                                                                  <input type="text" class="form-control" name="dateNaissance" aria-describedby="emailHelp" placeholder="1999-01-01" required>
                                                                              </div>
                                                                              <div class="form-group">
                                                                                      <label for="exampleInputEmail1">Téléphone</label>
                                                                                      <input type="text" class="form-control" name="telephone" aria-describedby="emailHelp" placeholder="0646623249" required>
                                                                                  </div>
                                                                                  <div class="form-group">
                                                                                    <label for="exampleInputEmail1">Adresse</label>
                                                                                    <input type="text" class="form-control" name="adresse" aria-describedby="emailHelp" placeholder="16 rue de la prairie" required>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="exampleInputEmail1">Code postal</label>
                                                                                    <input type="text" class="form-control" name="codePostal" aria-describedby="emailHelp" placeholder="69150" required>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="exampleInputEmail1">Ville</label>
                                                                                    <input type="text" class="form-control" name="ville" aria-describedby="emailHelp" placeholder="Lyon" required>
                                                                                </div>
                                                                              <button style="background-color:#ff7776; border-color:#ff7776" type="submit" class="btn btn-primary">Ajouter</button>
                                                                            </form>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                            </div>
                                        </div>
                                    </div>

                        </section>
                    </div>
                        </div>
                      </div>


    </body>
</html>
