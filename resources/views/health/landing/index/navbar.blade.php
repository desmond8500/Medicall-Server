@php
    $menu[] = array('route'=>'health', 'name'=>'Accueil');
@endphp

<div class="row">
    <div class="col-md-4">
        <a href="{!! route('health') !!}" class="logo">
            <img src="{{ asset($page->logo) }}" alt="{{ asset($page->logo) }}" height="40px">
            <p class="moto">Votre infirmier chez vous en un click</p>
        </a>
    </div>
    <div class="col-md-8">
        <p class="tel text-right">
            <i class="fa fa-phone telicon"></i>
         +221 77 837 23 90
        </p>
    </div>
    <div class="col-md-9 menu">
        <div class="row">
            @foreach ($menu as $item)
            <div class="col-md-1">
                <a href="{!! route($item['route']) !!}" class="submenu">{{ strtoupper($item['name']) }}</a>
            </div>
            @endforeach
        </div>
    </div>
    <div class="col-md-3 menu text-right">
        <div class="container">
            <a href="" class="btn btn-light color-primary">Connexion</a>
        <a href="" class="btn btn-outline-light">Inscription</a>
        </div>
    </div>
</div>
{{-- menu  --}}


