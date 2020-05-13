@extends('0 vacation.layout')

@section('nav2')
    @include('0 vacation.component.patient-nav')
@endsection

@section('content')
  {{-- <div class="col-md-12">
    <h3>Bonjour Mme X</h3>
  </div> --}}

{{-- ===================================================================== --}}
  <div class="col-md-4">
    <h5>Informations de base</h5>
    <div class="card">
      <div class="card-body">

        <div class="row">
          <div class="col-md-12">
            <img src="{!! asset('health/images/clive-surreal-9kQBQqY_xrk-unsplash.jpg') !!}" alt="" class="img-fluid">
          </div>

          <div class="col-md-12">
              <b>Nom :</b> Anya DAN <br>
              <b>Age :</b> 23 ans <br>
              <b>Genre :</b> Femme <br>
              <b>Taille :</b> 164 cm <br>
              <b>Poids :</b> 70 kg <br>
              <b>Groupe sanguin :</b> B+ <br>
          </div>

          </div>
        </div>


      </div>
    </div>

    {{-- ================================================================================== --}}

    <div class="col-md-8">
      <h5>Stat vitales</h5>
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <b>Température : </b> <br>
              <b>Poul : </b> <br>
              <b>Tension artérielle : </b> <br>
            </div>
          </div>
        </div>
      </div>


      <h5>Allergies</h5>
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <b>Medicaments : </b> Penicilin, Sulfa <br>
              <b>Alimements : </b> Noix <br>
            </div>
          </div>
        </div>
      </div>


      <h5>Traimements actuels</h5>
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              Huile de poisson <br>
              Vitamine A + D <br>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
