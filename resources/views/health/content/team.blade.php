<div class="doctors">
  <div class="doctors_image"><img src="{!! asset('health/images/doctors.jpg') !!}" alt=""></div>
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <div class="section_title">{{ $title }}</div>
        <div class="section_subtitle">{{ $title }}</div>
      </div>
    </div>
    <div class="row doctors_row">

      @foreach ($team as $key => $value)
        <!-- Doctor -->
        <div class="col-xl-3 col-md-6">
          <div class="doctor">
            <div class="doctor_image"><img src="{!! asset($value->image) !!}" alt=""></div>
            <div class="doctor_content">
              <div class="doctor_name"><a href="#">{{ $value->nom }}</a></div>
              <div class="doctor_title">{{ $value->titre }}</div>
              <div class="doctor_link"><a href="#">+</a></div>
            </div>
          </div>
        </div>
      @endforeach

    </div>
    <div class="row">
      <div class="col">
        <div class="button doctors_button ml-auto mr-auto">
          <a href="#">
            <span>Voir notre équipe</span><span>Voir notre équipe</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
