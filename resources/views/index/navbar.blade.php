{{-- @php
  $menu_images = glob('Medias/Images/*');
  $menu_gifs = glob('Medias/Gifs/*');
  $menu_videos = glob('Medias/Videos/*');
  $menus = ['Images' => $menu_images, 'Gifs' => $menu_gifs, 'Videos' => $menu_videos];
@endphp --}}

<nav class="navbar navbar-expand-lg">
  <a class="navbar-brand btn btn-success my-2 my-sm-0" href="{!! route('landing') !!}">Yk Medias</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav mr-auto">
      {{-- @foreach ($menus as $key => $menu)
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ basename($key) }}
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            @foreach ($menu as $key1 => $sousmenu)
              <a class="dropdown-item" href="{!! route(strtolower($key), ['folder'=> basename($sousmenu)]) !!}">{{ basename($sousmenu) }}</a>
            @endforeach
          </div>
        </li>
      @endforeach --}}
    </ul>
    <form class="form-inline my-2 my-lg-0 float-right">
      <input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
    </form>
    <a href='{!! route('landing') !!}' class="btn btn-outline-info my-2 my-sm-0 settings">
      <i class="fas fa-cogs"></i>
    </a>
  </div>
</nav>
