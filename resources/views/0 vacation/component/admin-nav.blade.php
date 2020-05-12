@php

$nav = json_decode('[
    { "titre": "Admin", "route": "admin.index" },
    { "titre": "Utilisateurs", "route": "admin.userlist" },
    { "titre": "Newsletter", "route": "admin.newsletter" },
    { "titre": "Rendez-Vous", "route": "admin.rv" },
    { "titre": "Blog", "route": "canvas" },
    { "titre": "Cvs", "route": "admin.inscription" }
]');
@endphp

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
        @foreach ($nav as $item)
            <li class="nav-item active">
                <a class="nav-link" href="{{ route($item->route) }}">{{ $item->titre }}<span class="sr-only">(current)</span></a>
            </li>
        @endforeach
      {{-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> --}}
    </ul>
  </div>
</nav>
