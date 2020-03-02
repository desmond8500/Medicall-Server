<footer class="footer">
  <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{!! asset($project->ProjectFooter[0]->image) !!}" data-speed="0.8"></div>
  <div class="footer_content">
    <div class="container">
      <div class="row">
        <!-- Footer About -->
        @include('health.footer.about')

        <!-- Footer Contact -->
        @include('health.footer.contact')

        <!-- Footer Hours -->
        @include('health.footer.horaires', ['horaires' => $project->ProjectHoraires])
      </div>
    </div>
  </div>
  <div class="footer_bar">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="footer_bar_content d-flex flex-sm-row flex-column align-items-lg-center align-items-start justify-content-start">
            <nav class="footer_nav">
              <ul class="d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
                @foreach ($project->ProjectMenu as $key => $value)
                  <li><a href="{!! route($value->route) !!}">{{ $value->name }}</a></li>
                @endforeach
              </ul>
            </nav>
            <div class="footer_links">
              <ul class="d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
                @foreach ($project->ProjectAssistance as $key => $value)
                  <li><a href="{!! route($value->route) !!}">{{ $value->value }}</a></li>
                @endforeach
              </ul>
            </div>
            <div class="footer_phone ml-lg-auto">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>{{ $project->phoneNumber }}</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
