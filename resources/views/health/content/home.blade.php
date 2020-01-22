
<div class="home_container">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="home_content">
          <div class="home_title">{{ $home->title }}</div>
          <div class="home_text">{{ $home->text }}</div>
          <div class="button home_button"><a href="{!! route('help') !!}"><span>{{ $project->ProjectHomeContent[0]->button }}</span><span>{{ $project->ProjectHomeContent[0]->button }}</span></a></div>
        </div>
      </div>
    </div>
  </div>
</div>
