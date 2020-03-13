@php
    $menu[] = array('route'=>'health', 'name'=>'Accueil');
@endphp

<div class="row">
    <div class="col-md-4">
        <a href="{!! route('health') !!}" class="logo">
            <img src="{{ asset('health/images/Logo/Logo.png') }}" alt="{{ asset('health/images/Logo/Logo.png') }}" height="40px">
            <p class="moto">Votre infirmier chez vous en un click</p>
        </a>
    </div>
    <div class="col-md-8 d-none d-sm-block">
        <p class="tel text-right">
            <i class="fa fa-phone telicon"></i>
         +221 77 837 23 90
        </p>
    </div>
</div>

{{-- Menu  --}}


<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand text-bold" href="{{ route('health') }}">Accueil</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            @isset($user)
                @if ($user->role == 'admin')
                    <li class="nav-item active">
                        <a href="{!! route('admin') !!}" class="submenu">ADMINISTRATION</a>
                    </li>
                @endif
            @endisset
        </ul>


        <div class="form-inline my-2 my-lg-0">
            @isset($user)
                <a href="{{ route('quit')}}" class="btn btn-light color-primary">Déconnexion</a>
            @else
                <a href="{{ route('healthlogin')}}" class="btn btn-light color-primary m-2">Connexion</a>
                <a href="{{ route('healthregister')}} " class="btn btn-outline-light m-2">Inscription</a>
            @endisset
        </div>
    </div>
</nav>


