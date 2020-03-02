<header class="header" id="header">
  <div>
    <div class="header_top">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="header_top_content d-flex flex-row align-items-center justify-content-start">
              <div class="logo">
                <a href="{!! route('landing') !!}">
                    <img src="{!! asset($project->projectLogo) !!}" alt="" width="130px">
                </a> <br>
                <span>Votre infirmier à chez vous en un click</span>
              </div>
              <div class="header_top_extra d-flex flex-row align-items-center justify-content-start ml-auto">
                <div class="header_top_nav">
                  <ul class="d-flex flex-row align-items-center justify-content-start">
                    @foreach ($project->ProjectAssistance as $key => $value)
                        <li><a href="{!! route($value->route) !!}">{{ $value->value }}</a></li>
                    @endforeach
                  </ul>
                </div>

                <div class="header_top_phone">
                  <i class="fa fa-phone" aria-hidden="true"></i>
                  <span>{{ $project->phoneNumber }}</span>
                </div>
              </div>
              <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header_nav" id="header_nav_pin">
      <div class="header_nav_inner">
        <div class="header_nav_container">
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="header_nav_content d-flex flex-row align-items-center justify-content-start">
                  <nav class="main_nav">
                    <ul class="d-flex flex-row align-items-center justify-content-start">
                      @foreach ($project->ProjectMenu as $key => $value)
                        <li><a href="{!! route($value->route) !!}">{{ $value->name }}</a></li>
                      @endforeach
                    </ul>
                  </nav>
                  <div class="search_content d-flex flex-row align-items-center justify-content-end ml-auto">
                    {{-- <form action="#" id="search_container_form" class="search_container_form">
                      <input type="text" class="search_container_input" placeholder="Rechercher" required="required">
                      <button class="search_container_button"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form> --}}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
