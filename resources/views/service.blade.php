<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Service {{$service->nom}} | GSB</title>
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
                    <li class="breadcrumb-item"><a style="color: #6b5aed;" href="/sieges">Sièges</a></li>
                    <li class="breadcrumb-item"><a style="color: #6b5aed;" href="#">Services</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$service->nom}}</li>
                </ol>
            </nav>
            <div class="row mr-5 pt-1">
                <div class="col-7">
                    <div class="col-11">
                        <div class="card row shadow-sm mb-2 bg-white rounded border-0">
                            <div class="card-body p-0">
                                <div class="p-3">
                                    <div class="dropdown" style="position: absolute; top:0; right:0;">
                                        <button class="btn" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i style="width:17px; height:17px;" data-feather="more-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu" style="background: none; border:none" aria-labelledby="dropdownMenu2">
                                            <div class="w-25">
                                                <div class="shadow-sm" style="width: 25px;border-radius: 20px; padding: 5px 8px; font-size: 10px; background-color:#00b9af;"><a href="/services/update/{{$service->id}}"><i style="color: #fff" class="fas fa-pen"></i></a> </div>
                                                <div class="shadow-sm" style="width:25px;margin-top:5px;border-radius: 20px; padding: 5px 8px; font-size: 10px; background-color:#00b9af;"><a href="/services/delete/{{$service->id}}"><i style="color: #fff" class="fas fa-trash-alt"></i></a></div>
                                            </div>
                                        </div>
                                    </div>

                                    <h5 style="color:#333333; font-weight:bold;" class="card-title">Service {{$service->nom}}</h5>
                                    <p class="card-text" style="font-size:13px"><b>Service:</b> {{$service->nom}}</p>
                                    <p class="card-text" style="font-size:13px"><b>Siege:</b> {{$service->siege->nom}}</p>
                                    <p class="card-text" style="font-size:13px"><b>Personnel:</b> 6</p>
                                    <p class="card-text" style="font-size:13px;"><b>Budget:</b> <i style="color:#54d575;">{{number_format($service->budget)}} €</i></p>

                                </div>
                            </div>

                        </div>
                        <div class="mb-4" style="text-align: right;">
                            <div style="display: inline-block">
                                <form class="row" action="/services/updatebudget/{{$service->id}}" method="post">
                                    @csrf
                                    <div class="form">
                                        <b>Budget:</b> <input class="shadow-sm" type="text" placeholder="Budget" style="color: #727272;border: 1px solid #fff; font-size: 13px; padding:.375rem 1.75rem .375rem .75rem; border-radius:.25rem; width:125px; font-style:italic;" name="budget" value={{$service->budget}}>
                                    </div>
                                    <div class="dropdown" style="position: absolute; top:0; right:0;">
                                        <button class="btn" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i style="width:17px; height:17px;" data-feather="more-vertical"></i>
                                        </button>
                                        <div class="dropdown" style="position: absolute; top:0; right:0;">
                                            <button class="btn" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i style="width:17px; height:17px;" data-feather="more-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu" style="background: none; border:none" aria-labelledby="dropdownMenu2">
                                                <div class="w-25">
                                                    <div class="shadow-sm" style="width: 25px;border-radius: 20px; padding: 5px 8px; font-size: 10px; background-color:#00b9af;"><a href="/services/update/{{$service->id}}"><i style="color: #fff" class="fas fa-pen"></i></a> </div>
                                                    <div class="shadow-sm" style="width:25px;margin-top:5px;border-radius: 20px; padding: 5px 8px; font-size: 10px; background-color:#00b9af;"><a href="/services/delete/{{$service->id}}"><i style="color: #fff" class="fas fa-trash-alt"></i></a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dropdown-menu" style="background: none; border:none" aria-labelledby="dropdownMenu2">
                                            <div class="w-25">
                                                <div class="shadow-sm" style="width: 25px;border-radius: 20px; padding: 5px 8px; font-size: 10px; background-color:#00b9af;"><a href="/services/update/{{$service->id}}"><i style="color: #fff" class="fas fa-pen"></i></a> </div>
                                                <div class="shadow-sm" style="width:25px;margin-top:5px;border-radius: 20px; padding: 5px 8px; font-size: 10px; background-color:#00b9af;"><a href="/services/delete/{{$service->id}}"><i style="color: #fff" class="fas fa-trash-alt"></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <button style="background-color:#6b5aed; border-color:#6b5aed; padding:5px 10px; font-size:13px; margin-left:5px;" type="submit" class="btn btn-primary"><i style="width:17px; height:17px;" data-feather="save"></i></button>
                                </form>
                            </div>
                        </div>

                    </div>
                    <div class="col-11">
                        <div class="">
                            <div class="body p-0">
                                <div class="">
                                    <div class="p-2 mb-2 shadow-sm rounded row" style="background-color:#fff; color:#6b5aed;">
                                        <div class="col text-center">
                                            <h6 class="card-title mb-0" style="font-weight:bold; font-size: 13px">Liste du personnel du service</h6>
                                        </div>
                                    </div>
                                    @foreach ($service->personnels as $personnel)
                                    <div class="bg-white p-2 mb-2 shadow-sm rounded row">

                                        <div class="col-1 text-center" style="font-size: 13px">
                                            <p class="card-title mb-0">{{$personnel->id}}</p>
                                        </div>
                                        <div class="col text-center" style="font-size: 13px">
                                            <p class="card-title mb-0">{{$personnel->nom}}</p>
                                        </div>
                                        <div class="col text-center" style="font-size: 13px">
                                            <p class="card-title mb-0">{{$personnel->prenom}}</p>
                                        </div>
                                        <div class="col text-center" style="font-size: 13px">
                                            <p class="card-title mb-0">{{$personnel->status}}</p>
                                        </div>
                                        <div class="col text-center" style="font-size: 13px">
                                            <p class="card-title mb-0">{{$personnel->telephone}}</p>
                                        </div>
                                        <div class="col text-center" style="font-size: 13px">
                                            <div class="dropdown" style="position: absolute; top:-10px; right:0;">
                                                <button class="btn" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i style="width:17px; height:17px;" data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu" style="background: none; border:none" aria-labelledby="dropdownMenu2">
                                                    <div class="w-25">
                                                        <div class="shadow-sm" style="width:25px;margin-top:5px;border-radius: 20px; padding: 5px 8px; font-size: 10px; background-color:#00b9af;"><a href="/personnels/services/delete/{{$personnel->id}}/{{$service->id}}"><i style="color: #fff" class="fas fa-trash-alt"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @if (count($service->personnels) == 0)
                                    <div class="bg-white p-2 mb-2 shadow-sm rounded row">
                                        <p class="card-title mb-0 m-auto" style="font-size: 10px; color:#727272;">Le service ne contient aucun personnel.</p>
                                    </div>
                                    @endif

                                    <div style="text-align: right;">
                                        <div style="display: inline-block">
                                            <form class="row" action="/personnels/services/create/{{$service->id}}" method="post">
                                                @csrf
                                                <div class="form">
                                                    <select class="custom-select shadow-sm" name="personnel_id" style="border: 1px solid #fff; font-size: 13px;" name="status" required>
                                                        <option value="">Selectionner un personnel</option>
                                                        @foreach ($personnels as $personnel)
                                                        <option value="{{$personnel->id}}">{{$personnel->nom}} {{$personnel->prenom}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <button style="background-color:#6b5aed; border-color:#6b5aed; padding:5px 10px; font-size:13px; margin-left:5px;" type="submit" class="btn btn-primary">Relier au service</button>
                                            </form>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-5">
                    <div class="col-12">
                        <div class="">
                            <div class="body p-0">
                                <div class="">
                                    <div class="p-2 mb-2 shadow-sm rounded row" style="background-color:#fff; color:#6b5aed;">
                                        <div class="col text-center">
                                            <h6 class="card-title mb-0" style="font-weight:bold; font-size: 13px;">Activités du service</h6>
                                        </div>
                                    </div>
                                    @foreach ($service->depenses as $depense)
                                    <div class="bg-white p-2 mb-2 shadow-sm rounded row">

                                        <div class="col-1 text-center" style="font-size: 13px">
                                            <p class="card-title mb-0">{{$depense->id}}</p>
                                        </div>
                                        <div class="col-4 text-center" style="font-size: 13px">
                                            <p class="card-title mb-0">{{$depense->libelle}}</p>
                                        </div>
                                        <div class="col text-center" style="font-size: 13px; color:#ed5a5a;">
                                            <p class="card-title mb-0 row">- {{$depense->prix}} EUR</p>
                                        </div>
                                        <div class="col-5 text-center" style="font-size: 13px">
                                            <p class="card-title mb-0">{{$depense->date}}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                    @if (count($service->depenses) == 0)
                                    <div class="bg-white p-2 mb-2 shadow-sm rounded row">
                                        <p class="card-title mb-0 m-auto" style="font-size: 10px; color:#727272;">Le service ne contient aucune activité.</p>
                                    </div>
                                    @endif
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>

<script>
    feather.replace()
</script>
