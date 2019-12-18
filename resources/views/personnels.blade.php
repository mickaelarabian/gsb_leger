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
                </table>


            </section>
        </div>
            </div>
          </div>


</body>
</html>
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
                                  <li class="breadcrumb-item"><a href="#">Personnels /</a></li>
                                </ol>
                              </nav>
                              <div data-toggle="modal" data-target="#exampleModal" style="position:absolute; top:15px; right: 40px;">
                                <a class="shadow-sm" style="font-size: 15px; padding: 5px 15px; color: #fff; background-color: #ff7776; border-radius: 25px;" class="row" href="/personnels/create">Ajouter un personnel <i style="font-size: 14px; padding-top:5px; padding-left:5px;" class="fas fa-plus"></i></a>
                            </div>
                            <div class="pr-5" style="margin:0px">
                        <section class="row">
                            <div class="col-10">
                            <div class="">
                                <div class="body p-0">
                                    <div class="">
                                              <div class="p-3 mb-2 shadow-sm rounded row" style="background-color:#ff7776; color:#fff;">
                                                  <div class="col-1 text-center">
                                                      <h6 class="card-title mb-0" style="font-weight:bold">Matricule</h6>
                                                  </div>
                                                  <div class="col-1 text-center">
                                                        <h6 class="card-title mb-0" style="font-weight:bold">Nom</h6>
                                                    </div>
                                                  <div class="col-1 text-center">
                                                        <h6 class="card-title mb-0" style="font-weight:bold">Prénom</h6>
                                                    </div>
                                                    <div class="col-1 text-center">
                                                            <h6 class="card-title mb-0" style="font-weight:bold">Status</h6>
                                                        </div>
                                                    <div class="col-2 text-center">
                                                            <h6 class="card-title mb-0" style="font-weight:bold">Date de naissance</h6>
                                                        </div>
                                                        <div class="col-1 text-center">
                                                                <h6 class="card-title mb-0" style="font-weight:bold">Téléphone</h6>
                                                            </div>
                                                            <div class="col-2 text-center" >
                                                                    <h6 class="card-title mb-0" style="font-weight:bold">Adresse</h6>
                                                                </div>
                                                                <div class="col-2 text-center">
                                                                        <h6 class="card-title mb-0" style="font-weight:bold">Code Postal</h6>
                                                                    </div>
                                                                    <div class="col-1 text-center">
                                                                            <h6 class="card-title mb-0" style="font-weight:bold">Ville</h6>
                                                                        </div>
                                              </div>
                                              @foreach ($personnels as $personnel)
                                    <div class="bg-white p-2 mb-2 shadow-sm rounded row">

                                            <div class="col-1 p-1 text-center" style="font-size: 15px">
                                            <p class="card-title mb-0">{{$personnel->id}}</p>
                                                </div>
                                                <div class="col-1 p-1 text-center" style="font-size: 15px">
                                                      <p class="card-title mb-0">{{$personnel->nom}}</p>
                                                  </div>
                                                <div class="col-1 p-1 text-center" style="font-size: 15px">
                                                      <p class="card-title mb-0">{{$personnel->prenom}}</p>
                                                  </div>
                                                  <div class="col-1 p-1 text-center" style="font-size: 15px">
                                                        <p class="card-title mb-0">{{$personnel->status}}</p>
                                                    </div>
                                                  <div class="col-2 p-1 text-center" style="font-size: 15px">
                                                          <p class="card-title mb-0">{{$personnel->dateNaissance}}</p>
                                                      </div>
                                                      <div class="col-1 p-1 text-center" style="font-size: 15px">
                                                              <p class="card-title mb-0">{{$personnel->telephone}}</p>
                                                          </div>
                                                          <div class="col-2 p-1 text-center" style="font-size: 15px">
                                                                  <p class="card-title mb-0">{{$personnel->adresse}}</p>
                                                              </div>
                                                              <div class="col-2 p-1 text-center" style="font-size: 15px">
                                                                      <p class="card-title mb-0">{{$personnel->codePostal}}</p>
                                                                  </div>
                                                                  <div class="col-1 p-1 text-center" style="font-size: 15px">
                                                                          <p class="card-title mb-0">{{$personnel->ville}}</p>
                                                                      </div>

                                                                            <div class="dropdown" style="position: absolute; right:0;">
                                                                                    <button class="btn" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                            <i class="fas fa-ellipsis-v"></i>
                                                                                    </button>
                                                                                    <div class="dropdown-menu" style="background: none; border:none" aria-labelledby="dropdownMenu2">
                                                                                            <div class="w-25">
                                                                                            <div class="shadow-sm" style="width: 25px;border-radius: 20px; padding: 5px 8px; font-size: 10px; background-color:#ff7776;"><i style="color: #fff" class="fas fa-pen"></i> </div> <div class="shadow-sm" style="width:25px;margin-top:5px;border-radius: 20px; padding: 5px 8px; font-size: 10px; background-color:#ff7776;"><a href="/personnels/delete/{{$personnel->id}}"><i style="color: #fff" class="fas fa-trash-alt"></i></a></div>
                                                                                            </div>
                                                                                     </div>
                                                                                  </div>




                                    </div>
                                    @endforeach

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
