<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste du personnel | GSB</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/feather-icons"></script>
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
                    <li class="breadcrumb-item"><a style="color: #6b5aed;" href="/demandes">Demandes /</a></li>
                </ol>
            </nav>
           
            <div class="pr-5" style="margin:0px">
                <section class="row">
                    <div class="col-12">
                        <div class="">
                            <div class="body p-0">
                                <div class="">
                                    <div class="p-2 mb-2 shadow-sm rounded row" style="background-color:#fff; color:#424242;">
                                        <div class="col-1 text-center">
                                            <h6 class="card-title mb-0" style="font-weight:bold; font-size: 13px">Matricule</h6>
                                        </div>
                                        <div class="col-1 text-center">
                                            <h6 class="card-title mb-0" style="font-weight:bold; font-size: 13px">Nom</h6>
                                        </div>
                                        <div class="col-1 text-center">
                                            <h6 class="card-title mb-0" style="font-weight:bold; font-size: 13px">Prénom</h6>
                                        </div>
                                        <div class="col-1 text-center">
                                            <h6 class="card-title mb-0" style="font-weight:bold;font-size: 13px">Status</h6>
                                        </div>
                                        <div class="col-2 text-center">
                                            <h6 class="card-title mb-0" style="font-weight:bold;font-size: 13px">Date de naissance</h6>
                                        </div>
                                       
                                    </div>
                                    @foreach ($demandes as $demande)
                                    <div class="bg-white p-2 mb-2 shadow-sm rounded row">
                                        <div class="col-1 p-1 text-center" style="font-size: 13px">
                                            <p class="card-title mb-0">{{$demande->id}}</p>
                                        </div>
                                        <div class="col-1 p-1 text-center" style="font-size: 13px">
                                            <p class="card-title mb-0">{{$demande->budget}}</p>
                                        </div>
                                        <div class="col-1 p-1 text-center" style="font-size: 13px">
                                            <p class="card-title mb-0">{{$demande->date}}</p>
                                        </div>
                                        <div class="col-1 p-1 text-center" style="font-size: 13px">
                                            <p class="card-title mb-0">{{$demande->service_id}}</p>
                                        </div>
                                        <div class="col-2 p-1 text-center" style="font-size: 13px">
                                            <p class="card-title mb-0">{{$demande->status}}</p>
                                        </div>
                                       




                                    </div>
                                    @endforeach
                                    @if (count($demandes) == 0)
                                    <div class="bg-white p-2 mb-2 shadow-sm rounded row">
                                        <p class="card-title mb-0 m-auto" style="font-size: 10px; color:#727272;">Aucune demande n'a été éffectuée.</p>
                                    </div>
                                    @endif

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

<script>
    feather.replace()
  </script>