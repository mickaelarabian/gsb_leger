<div class="col-9 pr-0 pt-3 shadow-sm nav flex-column nav-pills" style="background-color: #fff; height: 100%" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <img style="margin-left:50px" width="50px" src="https://clemtimber.files.wordpress.com/2017/12/logo-gsb.png?w=780" alt="logo gsb">
    <a @if (!isset($current)) id="current"  @endif href="/" class="nav-link pl-3 mt-5" style="color:#424242; border-radius:0;"><div class="row" style="font-size:12px"><div class="col-3" style="padding-right:5px;text-align:right;"><i style="width:13px; height:13px;" data-feather="home"></i></div> <div class="col-9" style="padding-left:5px">Sièges</div></div></a>
    <a @if (isset($current) && $current == 'personnels') id="current"  @endif href="/personnels" class="nav-link pl-3" style="color:#424242; border-radius:0;"><div class="row" style="font-size:12px; border-radius:0;"><div class="col-3" style="padding-right:5px;text-align:right;"><i style="width:13px; height:13px;" data-feather="users"></i></div> <div class="col-9" style="padding-left:5px">Personnels</div></div></a>
  </div>

  <style>
  #current{
    color:#6b5aed !important;
    border-left: 3px solid #6b5aed;
  }
  </style>
