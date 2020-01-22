<div class="col-lg-4 footer_col">
  <div class="footer_hours">
    <div class="footer_hours_title">Horaires des infirmiers</div>
    <ul class="hours_list">
        @foreach ($horaires as $key => $value)
          <li class="d-flex flex-row align-items-center justify-content-start">
            <div>{{ $value->date }}</div>
            <div class="ml-auto">{{ $value->heure }}</div>
          </li>
        @endforeach
    </ul>
  </div>
</div>
