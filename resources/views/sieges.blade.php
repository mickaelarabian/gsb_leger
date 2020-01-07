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
        @include('/include/header')
                <div class="row">
                        <div class="col-2" style="position: absolute; top: 0; height: 100%">
                            @include('/include/menu')
                        </div>
                        <div class="col-10" style="position: absolute; right:0;">
                            <nav aria-label="breadcrumb" style="width: 40%; margin-top: 25px">
                                <ol class="breadcrumb row" style="padding: 2px 10px; background:none; font-size:13px">
                                    <li class="breadcrumb-item"><a style="color: #6b5aed;" href="/"><i class="fas fa-home"></i> Dashboard</a></li>
                                    <li class="breadcrumb-item"><a style="color: #6b5aed;" href="/sieges">Sièges</a></li>
                                </ol>
                            </nav>

                                <div data-toggle="modal" data-target="#exampleModal" style="position:absolute; top:15px; right: 40px;">
                                        <a class="shadow-sm" style="font-size: 13px; padding: 5px 15px; color: #fff; background-color: #6b5aed; border-radius: 25px;" class="row" href="/sieges/create">Ajouter un siège <i style="font-size: 13px; padding-top:5px; padding-left:5px;" class="fas fa-plus"></i></a>
                                    </div>
                                    <div class="mt-4 mb-4">
                                        <h5 style="font-weight:500; text-align: center">Les sièges de Galaxy Swiss Bourdin</h5>
                                    </div>
                            <div class="pt-1 pr-5" style="margin:0px">
                        <section class="row">
                                @foreach ($sieges as $siege)
                            <div class="col-4">
                                <div class="card shadow-sm mb-5 bg-white rounded border-0">
                                    <div class="card-body p-0">
                                        <div class="p-3">
                                            <div class="dropdown" style="position: absolute; top:0; right:0;">
                                                    <button class="btn" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-v"></i>
                                                    </button>
                                                    <div class="dropdown-menu" style="background: none; border:none" aria-labelledby="dropdownMenu2">
                                                            <div class="w-25">
                                                            <div class="shadow-sm" style="width: 25px;border-radius: 20px; padding: 5px 8px; font-size: 10px; background-color:#00b9af;"><a href="/sieges/update/{{$siege->id}}"><i style="color: #fff" class="fas fa-pen"></i></a> </div> <div class="shadow-sm" style="width:25px;margin-top:5px;border-radius: 20px; padding: 5px 8px; font-size: 10px; background-color:#00b9af;"><a href="/sieges/delete/{{$siege->id}}"><i style="color: #fff" class="fas fa-trash-alt"></i></a></div>
                                                            </div>
                                                     </div>
                                                  </div>

                                        <h6 style="color:#333; font-weight:bold;" class="card-title">Siège {{ $siege->nom }}</h6>
                                        <p class="card-text" style="font-size:13px">Ville: {{ $siege->ville }}</p>
                                        <p class="card-text" style="font-size:13px">Pays: {{ $siege->pays }}</p>
                                        <p class="card-text" style="font-size:13px">Budget total: {{ $siege->budget }} €</p>
                                        <p class="card-text" style="font-size:13px">Personnels total: 27</p>
                                    </div>
                                    <a class="btn btn-primary btn-sm rounded-0 w-100" style="border-radius:0px 0px .25rem .25rem  !important; background-color:#6b5aed; border-color:#6b5aed; font-size:13px" href="/services/siege/{{$siege->id}}" role="button">Accéder au siège</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach


                        </section>
                    </div>
                        </div>
                      </div>
    </body>
</html>


