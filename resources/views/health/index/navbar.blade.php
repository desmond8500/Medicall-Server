<link rel="stylesheet" href="{!! asset('health/navbar.css') !!}">

@php
  $menus = json_decode('[
    { "name": "Acceuil", "route": "landing" },
    { "name": "Services", "route": "services"  },
    { "name": "Informations", "route": "news"  },
    { "name": "A propos", "route": "about"  },
    { "name": "Contact", "route": "contact" }
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

{{-- Header  --}}

@include('health.index.header')


<nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark backcolor ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent center-block" align="center">
    <ul class="navbar-nav mr-auto">
      @foreach ($menus as $key => $menu)
        <li class="nav-item active">
          <a class="nav-link" href="{!! route($menu->route) !!}">
            {{ $menu->name }}
            <span class="sr-only">(current)</span>
          </a>
        </li>
      @endforeach
    </ul>
    <form class="form-inline my-2 my-lg-0">

      <a href="{!! route('landing') !!}" class="btn btnwhite my-2 my-sm-0" >
        <i class="fa fa-sign-out"></i> Deconnexion
      </a>
    </form>
  </div>
</nav>

