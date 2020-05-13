@extends('0 vacation.layout')

@section('link')

@endsection

@section('content')
@include('flash')
<section class="">
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-2">
                <img src="{{asset('src/images/img/undraw_Booked_j7rj.png')}}" alt="" class="img-fluid">
                Vous pouvez aussi  nous appeller directement au 77 837 23 90.

            </div>
            <div class="col-md-4">
                <form action="{{route('rvs.store')}}" method="POST" class="appointment-form">
                    @csrf
                    <h3 class="mb-3">Prendre un rendez-vous</h3>
                    <input type="text" name="statut" value="Nouveau" hidden>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="nom" class="form-control" placeholder="Nom" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="tel" name="tel" class="form-control" placeholder="Téléphone" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <select name="besoin" class="form-control">
                                    <option>Besoin</option>
                                    <option>Infirmier</option>
                                    <option>Sage-femme</option>
                                    <option>Kinesitérapeute</option>
                                    <option>Rejoindre notre équipe</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea name="description" class="form-control" placeholder="Description du besoin" cols="10" rows="4" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" value="Envoyer" class="btn btn-primary py-3 px-4">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection

@section('script')

@endsection
