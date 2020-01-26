<div class="cta">
  <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{!! asset($project->ProjectCTA[0]->image) !!}" data-speed="0.8"></div>
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="cta_container d-flex flex-xl-row flex-column align-items-xl-start align-items-center justify-content-xl-start justify-content-center">
          <div class="cta_content text-xl-left text-center">
            <div class="cta_title">{{ $project->ProjectCTA[0]->title }}</div>
            <div class="cta_subtitle"> {{ $project->ProjectCTA[0]->subtitle }} </div>
          </div>
          <div class="button cta_button ml-xl-auto"><a href="{!! route('landing') !!}"><span>Inscription</span><span>S'incrire</span></a></div>
        </div>
      </div>
    </div>
  </div>
</div>
