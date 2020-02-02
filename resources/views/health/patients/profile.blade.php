@extends('health.patients.layout')

@section('content')
  {{-- <div class="col-md-12">
    <h3>Bonjour Mme X</h3>
  </div> --}}

{{-- ===================================================================== --}}
  <div class="col-md-12">
    <h5>Informations de base</h5>
    <div class="card">
      <div class="card-body">

        <div class="row">
          <div class="col-md-3">
            <img src="{!! asset('health/images/about_1.jpg') !!}" alt="" class="img-fluid">
          </div>
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-4">
                <input class="form-control" type="text" placeholder="Prénom" name="">
              </div>
              <div class="col-md-4">
                <input class="form-control" type="text" placeholder="Nom" name="">
              </div>
              <div class="col-md-4">
                <input class="form-control" type="text" placeholder="Genre" name="">
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <input class="form-control" type="text" placeholder="Date de naissance" name="">
              </div>
            </div>

          </div>
        </div>


      </div>
    </div>

    {{-- ================================================================================== --}}

    <div class="row">
      <div class="col-md-6">
        <h5>Mes informations</h5>
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <input class="form-control" type="text" placeholder="Téléphone" name="">
              </div>
              <div class="col-md-12">
                <input class="form-control" type="text" placeholder="Mail" name="">
              </div>
              <div class="col-md-12">
                <input class="form-control" type="text" placeholder="adresse" name="">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <h5>Contact d'urgence</h5>
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-4">
                <input class="form-control" type="text" placeholder="Prénom" name="">
              </div>
              <div class="col-md-4">
                <input class="form-control" type="text" placeholder="Nom" name="">
              </div>
              <div class="col-md-4">
                <input class="form-control" type="text" placeholder="Genre" name="">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <input class="form-control" type="text" placeholder="Relation au patient" name="">
              </div>
              <div class="col-md-12">
                <input class="form-control" type="text" placeholder="téléphone" name="">
              </div>
              <div class="col-md-12">
                <input class="form-control" type="text" placeholder="mail" name="">
              </div>
              <div class="col-md-12">
                <input class="form-control" type="text" placeholder="adresse" name="">
              </div>
            </div>



          </div>
        </div>
    </div>

    </div>

@endsection
