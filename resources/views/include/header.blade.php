<nav class="navbar navbar-expand-lg navbar-light bg-wight shadow-sm bg-white">
    <div class="row" style="width: 100%">
    <div class="col-2">

    </div>
    <div class="col-10">
        <div class="collapse navbar-collapse float-right" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-dark" style="background-color:#6b5aed; font-size:13px; color:#fff!important; padding: 2px 10px; border: 1px solid #6b5aed; border-radius:4px; margin-top:5px; margin-right:10px;" href="/user/login"><i style="width:13px; height:13px;" data-feather="user"></i> {{ strtoupper(auth()->user()->nom) }}</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" style=" color:#6b5aed; padding: 2px 10px; font-size:13px; margin-top:5px; border: 1px solid #6b5aed; border-radius:4px;" href="/logout"><i style="width:13px; height:13px;" data-feather="log-out"></i> Deconnexion</a>
                </li>
            </ul>

        </div>
    </div>
</div>
    </nav>
