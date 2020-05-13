@extends('0 vacation.layout')

@section('link')
<style>
    .container{
        display: block;
        height: 500px;
    }
</style>
@endsection

@section('content')
<section class="login-wrap login-wrap-2" style="background-image: url('');" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <div class="container mb-12">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-center">Connexion</h2>
                        </div>
                        <div class="col-md-4 offset-md-4">
                            <form action="{{url('/login')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="tel">Téléphone</label>
                                    <input type="text" id="tel" class="form-control" name="tel" autofocus>
                                </div>
                                <div class="form-group">
                                    <label>Mot de passe</label>
                                    <input type="password" class="form-control" name="password">
                                </div>

                                <button class="btn btn-primary mb-1212">Valider</button>
                                <hr>
                                <a href="{{ route('v-register')}} ">Créer un compte</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('script')

@endsection
