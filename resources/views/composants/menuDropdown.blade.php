<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    {{ $titre }}
  </a>
  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
    @foreach ($menu as $key => $value)
      <a class="dropdown-item" href="/{{ $value->link }}">{{ $value->name}}</a>
    @endforeach
  </div>
</li>
