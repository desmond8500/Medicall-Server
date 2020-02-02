@extends('health.patients.layout')

@section('content')
  <div class="col-md-12">
    <h3>Bonjour Mme X</h3> <br>
    <h5>Mes documents</h5>
    <br>
  </div>

{{-- ===================================================================== --}}
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Medical</a>
          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Legal</a>
          <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Personnel</a>
        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

          <table class="table">
            <thead class="tablebackcolor">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Date</th>
                <th scope="col">Type</th>
                <th scope="col">PDF</th>
              </tr>
            </thead>
            <tbody>
              @for ($i=0; $i<5; $i++)
                <tr>
                  <th scope="row">
                    <input type="checkbox" name="">
                  </th>
                  <td>1{{ $i }}/01/2020</td>
                  <td>Otto zeze zeze zerzer zeaazaz azeaz </td>
                  <td><i class="fa fa-file"></i></td>
                </tr>
              @endfor
            </tbody>
          </table>


        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
          @php
            $formulaires = [
              'Formulaire de consentement des patients',
              'Formulaire de responsabilité financière'
            ];
            $notices = [
              'Préservation des données personnelles'
            ];

          @endphp
          <div class="row">
            <div class="col-md-6">
              @foreach ($formulaires as $key => $formulaire)
                <div class="card">
                  <div class="card-body">
                    <p>{{ $formulaire }}</p>

                    <div class="row">
                      <div class="col-md-6">
                        <button  class="btn btn-outline-success">Télécharger le formulaire</button>
                      </div>
                      <div class="col-md-6">
                        <button  class="btn btn-outline-success">Ajouter</button>
                      </div>
                    </div>

                  </div>
                </div>
              @endforeach
            </div>
            <div class="col-md-6">
              @foreach ($notices as $key => $notice)
                <div class="card">
                  <div class="card-body">
                    <p>{{ $notice }}</p>
                    <div class="row">
                      <div class="col-md-6">
                        <button  class="btn btn-outline-success">
                          <i class="fa fa-file"></i>
                          Afficher le document
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>

        </div>
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">3...</div>
      </div>
      </div>
    </div>

  </div>


@endsection
