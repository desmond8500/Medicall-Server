
<div class="menu trans_500">
  <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
    <div class="menu_close_container"><div class="menu_close"></div></div>
    <form action="#" class="menu_search_form">
      <input type="text" class="menu_search_input" placeholder="Rechercher" required="required">
      <button class="menu_search_button"><i class="fa fa-search" aria-hidden="true"></i></button>
    </form>
    <ul>
      @foreach ($project->ProjectAssistance as $key => $value)
        <li class="menu_item"><a href="{!! route($value->route) !!}">{{ $value->value }}</a></li>
      @endforeach
    </ul>
  </div>
  <div class="menu_social">
    <ul>
      @foreach ($project->ProjectSocial as $key => $value)
        <li><a href="{!! route($value->route) !!}"><i class="fa fa-{{ $value->name }}" aria-hidden="true"></i></a></li>
      @endforeach
    </ul>
  </div>
</div>
