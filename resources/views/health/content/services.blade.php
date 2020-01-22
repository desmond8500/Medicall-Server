<div class="services">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <div class="section_title">Nos Services</div>
        <div class="section_subtitle">Choisissez</div>
      </div>
    </div>
    <div class="row icon_boxes_row">

      <!-- Icon Box -->
      @foreach ($project->ProjectServices as $key => $value)
        <div class="col-xl-4 col-lg-6">
          <div class="icon_box">
            <div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
              <div class="icon_box_icon"><img src="{!! asset($value->icon) !!}" alt=""></div>
              <div class="icon_box_title">{{ $value->title }}</div>
            </div>
            <div class="icon_box_text">{{ $value->text }}</div>
          </div>
        </div>
      @endforeach

    </div>
    <div class="row">
      <div class="col">
        <div class="button services_button ml-auto mr-auto"><a href="#"><span>read more</span><span>read more</span></a></div>
      </div>
    </div>
  </div>
</div>
