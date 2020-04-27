<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('vacation')}}">
            <img src="{{ asset('src/images/logo/logo.png')}} " alt="" class="img-fluid">
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span> Menu
    </button>
    <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
            @foreach ($page->getNavigationMenu() as $menu)
                <li class="nav-item {{  (request()->is("vacation/$menu->route")) ? 'active' : ''}}"><a href="{{ route($menu->route) }}" class="nav-link">{{ $menu->name }}</a></li>
            @endforeach
        </ul>
    </div>
    </div>
</nav>
