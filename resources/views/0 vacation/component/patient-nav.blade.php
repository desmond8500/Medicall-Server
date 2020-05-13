@php

$nav = json_decode('[
    { "route": "patient.index", "titre": "Dashboard", "icon": "fa-tachometer" },
    { "route": "patient.rv", "titre": "Rendez-vous", "icon": "fa-calendar" },
    { "route": "patient.message", "titre": "Message", "icon": "fa-comments" },
    { "route": "patient.bilan", "titre": "Mon Bilan", "icon": "fa-heart" },
    { "route": "patient.profile", "titre": "Mon profile", "icon": "fa-user" },
    { "route": "patient.document", "titre": "Mes documents", "icon": "fa-file" }


    ]');
    // { "route": "dashboard", "titre": "Dashboard", "icon": "fa-th-large" },
    // { "route": "patients", "titre": "Dashboard", "icon": "fa-tachometer" },
    // { "route": "programme", "titre": "Rendez-vous", "icon": "fa-calendar" },
    // { "route": "message", "titre": "Message", "icon": "fa-comments" },
    // { "route": "analyse", "titre": "Mon Bilan", "icon": "fa-heart" },
    // { "route": "rapports", "titre": "Mon profile", "icon": "fa-user" },
    // { "route": "facturation", "titre": "Mes documents", "icon": "fa-file" },
    // { "route": "reglages", "titre": "Mes documents", "icon": "fa-file" }
@endphp

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
        @foreach ($nav as $item)
            @if (!is_array($item->route))
            <li class="nav-item active">
                <a class="nav-link" href="{{ route($item->route) }}">{{ $item->titre }}<span class="sr-only">(current)</span></a>
            </li>
            @else
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ $item->titre }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    @foreach ($item->route as $subitem)
                    <a class="dropdown-item" href="{{$subitem->route}}">{{$subitem->titre}}</a>

                    @endforeach
                </div>
            </li>
            @endif
        @endforeach

    </ul>
  </div>
</nav>
