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
                          <div class="col-10 pr-0 pt-3 shadow-sm nav flex-column nav-pills" style="background-color: #2B333D; height: 100%" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <img style="margin-left:50px" width="50px" src="https://clemtimber.files.wordpress.com/2017/12/logo-gsb.png?w=780" alt="logo gsb">
                            <a class="nav-link active mt-5 rounded-0 pl-3" style="color:#fff; background-color:#242A31;" id="v-pills-home-tab" data-toggle="pill" href="/" role="tab" aria-controls="v-pills-home" aria-selected="true"><div class="row" style="font-size:12px"><div class="col-3" style="padding-right:5px;text-align:right;"><i class="fas fa-home"></i></div> <div class="col-9" style="padding-left:5px">Dashboard</div></div></a>
                            <a href="/" class="nav-link pl-3" id="v-pills-profile-tab" style="color:#fff" data-toggle="pill" href="/" role="tab" aria-controls="v-pills-profile" aria-selected="false"><div class="row" style="font-size:12px"><div class="col-3" style="padding-right:5px;text-align:right;"><i class="fas fa-building"></i></div> <div class="col-9" style="padding-left:5px">Sièges</div></div></a>
                            <a class="nav-link pl-3" id="v-pills-profile-tab" style="color:#fff" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><div class="row" style="font-size:12px"><div class="col-3" style="padding-right:5px;text-align:right;"><i class="fas fa-network-wired"></i></div> <div class="col-9" style="padding-left:5px">Services</div></div></a>
                            <a class="nav-link pl-3" id="v-pills-profile-tab" style="color:#fff" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><div class="row" style="font-size:12px"><div class="col-3" style="padding-right:5px;text-align:right;"><i class="fas fa-user-friends"></i></div> <div class="col-9" style="padding-left:5px">Personnels</div></div></a>
                            <a class="nav-link pl-3" id="v-pills-profile-tab" style="color:#fff" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><div class="row" style="font-size:12px"><div class="col-3" style="padding-right:5px;text-align:right;"><i class="fas fa-receipt"></i></div> <div class="col-9" style="padding-left:5px">Dépenses</div></div></a>
                            <a class="nav-link pl-3" id="v-pills-settings-tab" style="color:#fff" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><div class="row" style="font-size:12px"><div class="col-3" style="padding-right:5px;text-align:right;"><i class="fas fa-tools"></i></div> <div class="col-9" style="padding-left:5px">Paramètre</div></div></a>
                          </div>
                        </div>
                        <div class="col-10" style="position: absolute; right:0;">
                            <nav aria-label="breadcrumb" style="width: 30%; margin-top: 25px">
                                <ol class="breadcrumb">
                                  <li class="breadcrumb-item"><a href="#">Sièges</a></li>
                                  <li class="breadcrumb-item"><a href="#">Services</a></li>
                                  <li class="breadcrumb-item active" aria-current="page">Service x</li>
                                </ol>
                              </nav>
                              <div class="row mr-5">
                                  <div class="col-7">
                                    <div class="col-11">
                                        <div class="card shadow-sm mb-4 bg-white rounded border-0">
                                            <div class="card-body p-0">
                                                <div class="p-3">
                                                    <div class="dropdown" style="position: absolute; top:0; right:0;">
                                                            <button class="btn" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-v"></i>
                                                            </button>
                                                            <div class="dropdown-menu" style="background: none; border:none" aria-labelledby="dropdownMenu2">
                                                                    <div class="w-25">
                                                                            <div class="shadow-sm" style="width: 25px;border-radius: 20px; padding: 5px 8px; font-size: 10px; background-color:#007bff;"><i style="color: #fff" class="fas fa-pen"></i> </div> <div class="shadow-sm" style="width:25px;margin-top:5px;border-radius: 20px; padding: 5px 8px; font-size: 10px; background-color:#007bff;"><i style="color: #fff" class="fas fa-trash-alt"></i></div>
                                                                    </div>
                                                             </div>
                                                          </div>

                                                <h5 class="card-title">Service {{ $service->nom }}</h5>
                                                <p class="card-text">Service: tgh</p>
                                                <p class="card-text">Siege: gtfvt</p>
                                                <p class="card-text">Personnel: 6</p>
                                                <p class="card-text">Budget: 45 000 $</p>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-11">
                                        <div class="card shadow-sm mb-4 bg-white rounded border-0">
                                            <div class="card-body p-0">
                                                <div class="p-3">
                                                    <div class="dropdown" style="position: absolute; top:0; right:0;">
                                                            <button class="btn" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-v"></i>
                                                            </button>
                                                            <div class="dropdown-menu" style="background: none; border:none" aria-labelledby="dropdownMenu2">
                                                                    <div class="w-25">
                                                                            <div class="shadow-sm" style="width: 25px;border-radius: 20px; padding: 5px 8px; font-size: 10px; background-color:#007bff;"><i style="color: #fff" class="fas fa-pen"></i> </div> <div class="shadow-sm" style="width:25px;margin-top:5px;border-radius: 20px; padding: 5px 8px; font-size: 10px; background-color:#007bff;"><i style="color: #fff" class="fas fa-trash-alt"></i></div>
                                                                    </div>
                                                             </div>
                                                          </div>

                                                <h5 class="card-title">Liste du personnel</h5>
                                                <p class="card-text">Arabian Mickaël Responsable Date</p>
                                                <p class="card-text">Arabian Mickaël Responsable Date</p>
                                                <p class="card-text">Arabian Mickaël Responsable Date</p>
                                                <p class="card-text">Arabian Mickaël Responsable Date</p>
                                                <p class="card-text">Arabian Mickaël Responsable Date</p>
                                                <p class="card-text">Arabian Mickaël Responsable Date</p>
                                                <p class="card-text">Arabian Mickaël Responsable Date</p>
                                            </div>
                                            <a class="btn btn-primary btn-sm rounded-0 w-100" style="border-radius:0px 0px .25rem .25rem  !important;" href="/service/{{$service->id}}" role="button">Accéder au service</a>
                                            </div>
                                        </div>
                                    </div>
                                  </div>

                                  <div class="col-4">
                                    <div class="col-12">
                                        <div class="card shadow-sm mb-4 bg-white rounded border-0">
                                            <div class="card-body p-0">
                                                <div class="p-3">
                                                    <div class="dropdown" style="position: absolute; top:0; right:0;">
                                                            <button class="btn" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-v"></i>
                                                            </button>
                                                            <div class="dropdown-menu" style="background: none; border:none" aria-labelledby="dropdownMenu2">
                                                                    <div class="w-25">
                                                                            <div class="shadow-sm" style="width: 25px;border-radius: 20px; padding: 5px 8px; font-size: 10px; background-color:#007bff;"><i style="color: #fff" class="fas fa-pen"></i> </div> <div class="shadow-sm" style="width:25px;margin-top:5px;border-radius: 20px; padding: 5px 8px; font-size: 10px; background-color:#007bff;"><i style="color: #fff" class="fas fa-trash-alt"></i></div>
                                                                    </div>
                                                             </div>
                                                          </div>

                                                <h5 class="card-title">Activités du service</h5>
                                                <p class="card-text">Libelle date -50$</p>
                                                <p class="card-text">Libelle date -50$</p>
                                                <p class="card-text">Libelle date -50$</p>
                                                <p class="card-text">Libelle date -50$</p>
                                                <p class="card-text">Libelle date -50$</p>
                                                <p class="card-text">Libelle date -50$</p>
                                                <p class="card-text">Libelle date -50$</p>
                                                <p class="card-text">Libelle date -50$</p>
                                                <p class="card-text">Libelle date -50$</p>
                                                <p class="card-text">Libelle date -50$</p>
                                                <p class="card-text">Libelle date -50$</p>
                                                <p class="card-text">Libelle date -50$</p>
                                                <p class="card-text">Libelle date -50$</p>
                                                <p class="card-text">Libelle date -50$</p>
                                            </div>
                                            <a class="btn btn-primary btn-sm rounded-0 w-100" style="border-radius:0px 0px .25rem .25rem  !important;" href="/service/{{$service->id}}" role="button">Accéder au service</a>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                              </div>
                        </div>
                      </div>


    </body>
</html>
