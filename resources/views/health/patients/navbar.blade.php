<link rel="stylesheet" href="{!! asset('health/navbar.css') !!}">

@php
  $menus = json_decode('[
    { "route": "patient", "title": "Dashboard", "icon": "fa-tachometer" },
    { "route": "rv", "title": "Rendez-vous", "icon": "fa-calendar" },
    { "route": "message", "title": "Message", "icon": "fa-comments" },
    { "route": "bilan", "title": "Mon Bilan", "icon": "fa-heart" },
    { "route": "profile", "title": "Mon profile", "icon": "fa-user" },
    { "route": "document", "title": "Mes documents", "icon": "fa-file" }
    ]');

  $menuMedecin = json_decode('[
    { "route": "dashboard", "title": "Dashboard", "icon": "fa-th-large" },
    { "route": "patients", "title": "Dashboard", "icon": "fa-tachometer" },
    { "route": "programme", "title": "Rendez-vous", "icon": "fa-calendar" },
    { "route": "message", "title": "Message", "icon": "fa-comments" },
    { "route": "analyse", "title": "Mon Bilan", "icon": "fa-heart" },
    { "route": "rapports", "title": "Mon profile", "icon": "fa-user" },
    { "route": "facturation", "title": "Mes documents", "icon": "fa-file" },
    { "route": "reglages", "title": "Mes documents", "icon": "fa-file" }
    ]');


@endphp

<nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark backcolor ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent center-block" align="center">
    <ul class="navbar-nav mr-auto">
      @foreach ($menus as $key => $menu)
        <li class="nav-item active">
          <a class="nav-link" href="{!! route($menu->route) !!}">
            <i class="fa {{ $menu->icon }}"></i>
            {{ $menu->title }}
            <span class="sr-only">(current)</span>
          </a>
        </li>

      @endforeach
      {{-- <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa fa-envelope-o">
            <span class="badge badge-danger">11</span>
          </i>
          Link
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">
          <i class="fa fa-envelope-o">
            <span class="badge badge-warning">11</span>
          </i>
          Disabled
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-envelope-o">
            <span class="badge badge-primary">11</span>
          </i>
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <ul class="navbar-nav ">
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa fa-bell">
            <span class="badge badge-info">11</span>
          </i>
          Test
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa fa-globe">
            <span class="badge badge-success">11</span>
          </i>
          Test
        </a>
      </li> --}}
    </ul>
    <form class="form-inline my-2 my-lg-0">
      {{-- <a href="{!! route('landing') !!}" class="form-inline my-2 my-lg-0">
        <i class="fas fa-sign-out"></i> qsdqsd
      </a> --}}
      {{-- <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search"> --}}
      <a href="{!! route('landing') !!}" class="btn btnwhite my-2 my-sm-0" >
        <i class="fa fa-sign-out"></i> Deconnexion
      </a>
    </form>
  </div>
</nav>
