@extends('0 vacation.layout')

@section('link')

@endsection

@section('content')

<section class="login-wrap login-wrap-2" style="background-image: url('');" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <div class="container mb-12">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-center">Inscription</h2>
                        </div>
                        <div class="col-md-6 offset-md-3">
                            <form action="{{route('v-registering')}}" method="POST" style="height:800px">
                                @csrf
                                <input type="text" class="form-control" name="role" hidden value="{{ $role }} ">
                                <div class="row" >
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Prénom</label>
                                            <input type="text" class="form-control" name="prenom" placeholder="Prénom">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nom</label>
                                            <input type="text" class="form-control" name="nom" placeholder="Nom">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Téléphone</label>
                                            <input type="text" class="form-control" name="tel" placeholder="Téléphone">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" name="email" placeholder="Adresse mail">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Mot de passe</label>
                                            <input type="password" class="form-control" name="password" placeholder="Mot de passe">
                                        </div>
                                    </div>

                                </div>
                                <button class="btn btn-primary ">Valider</button>
                                <hr>
                                <a href="{{ route('v-login')}} ">Déja incrit</a>
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
