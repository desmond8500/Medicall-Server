<div class="col-lg-3 footer_col">
  <div class="footer_about">
    <div class="logo">
      <a href="{!! route('landing') !!}">{{ $project->ProjectName }}</a>
    </div>
    <div class="footer_about_text">{{ $project->ProjectFooter[0]->text }}</div>
    <div class="footer_social">
      <ul class="d-flex flex-row align-items-center justify-content-start">
        @foreach ($project->ProjectSocial as $key => $value)
          <li><a href="{!! route($value->route) !!}"><i class="fa fa-{{ $value->name }}" aria-hidden="true"></i></a></li>
        @endforeach
      </ul>
    </div>
    <div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    </div>
  </div>
</div>
