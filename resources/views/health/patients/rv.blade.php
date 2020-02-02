@extends('health.patients.layout')

@section('content')
  <div class="col-md-12">
    <h3>Bonjour Mme X</h3> <br>
    <h5>Date: 02/02/2020</h5>
    <br>
  </div>

{{-- ===================================================================== --}}
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
          <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Date</th>
                <th scope="col">Heure</th>
                <th scope="col">Type de RV</th>
                <th scope="col">Provenance</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
              @for ($i=0; $i<10; $i++)
                <tr>
                  <th scope="row">
                    <input type="checkbox" name="">
                  </th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                  <td>@mdo</td>
                  <td>Confirmé</td>
                </tr>
              @endfor
            </tbody>
          </table>


        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">2...</div>
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">3...</div>
      </div>
      </div>
    </div>

  </div>


@endsection
