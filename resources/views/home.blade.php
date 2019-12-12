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
            <nav class="navbar navbar-expand-lg navbar-light bg-wight shadow-sm mb-5 bg-white rounded">
                    <a class="navbar-brand" href="#"><i class="feather icon-box"></i></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" routerLink="/">Dasboard<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" routerLink="/fabricants">Services</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" routerLink="/commands">Commandes</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container">
                        <section class="row">
                            <div class="col-3">
                                <div class="card shadow-sm p-3 mb-5 bg-white rounded border-0">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="/country/showcontinent/africa">Siège Social</a></h5>
                                        <p class="card-text">Ville: Lyon</p>
                                        <p class="card-text">Pays: France</p>
                                        <p class="card-text">Budget: 350 000 $</p>
                                        <p class="card-text">Budget restant: 180 000 $</p>(couleur vert/rouge/orange)
                                        <a class="btn btn-primary btn-sm mb-1" href="/country/showcontinent/africa" role="button">Accéder au siège</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                    <div class="card shadow-sm p-3 mb-5 bg-white rounded border-0">
                                        <div class="card-body">
                                            <h5 class="card-title"><a href="/country/showcontinent/africa">Siège Social</a></h5>
                                            <p class="card-text">Ville: Lyon</p>
                                            <p class="card-text">Pays: France</p>
                                            <p class="card-text">Budget: 350 000 $</p>
                                            <a class="btn btn-primary btn-sm mb-1" href="/country/showcontinent/africa" role="button">Accéder au siège</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                        <div class="card shadow-sm p-3 mb-5 bg-white rounded border-0">
                                            <div class="card-body">
                                                <h5 class="card-title"><a href="/country/showcontinent/africa">Siège Social</a></h5>
                                                <p class="card-text">Ville: Lyon</p>
                                                <p class="card-text">Pays: France</p>
                                                <p class="card-text">Budget: 350 000 $</p>
                                                <a class="btn btn-primary btn-sm mb-1" href="/country/showcontinent/africa" role="button">Accéder au siège</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                            <div class="card shadow-sm p-3 mb-5 bg-white rounded border-0">
                                                <div class="card-body">
                                                    <h5 class="card-title"><a href="/country/showcontinent/africa">Siège Social</a></h5>
                                                    <p class="card-text">Ville: Lyon</p>
                                                    <p class="card-text">Pays: France</p>
                                                    <p class="card-text">Budget: 350 000 $</p>
                                                    <a class="btn btn-primary btn-sm mb-1" href="/country/showcontinent/africa" role="button">Accéder au siège</a>
                                                </div>
                                            </div>
                                        </div>
                        </section>
                    </div>

    </body>
</html>
