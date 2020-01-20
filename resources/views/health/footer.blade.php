<footer class="footer">
  <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{!! asset($project->ProjectFooter[0]->image) !!}" data-speed="0.8"></div>
  <div class="footer_content">
    <div class="container">
      <div class="row">

        <!-- Footer About -->
        <div class="col-lg-3 footer_col">
          <div class="footer_about">
            <div class="logo">
              <a href="{!! route('landing') !!}">{{ $project->ProjectName }}</a>
            </div>
            <div class="footer_about_text">{{ $project->ProjectFooter[0]->text }}</div>
            <div class="footer_social">
              <ul class="d-flex flex-row align-items-center justify-content-start">
                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              </ul>
            </div>
            <div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
          </div>
        </div>

        <!-- Footer Contact -->
        <div class="col-lg-5 footer_col">
          <div class="footer_contact">
            <div class="footer_contact_title">Contactez-Nous</div>
            <div class="footer_contact_form_container">
              <form action="#" class="footer_contact_form" id="footer_contact_form">
                <div class="d-flex flex-xl-row flex-column align-items-center justify-content-between">
                  <input type="text" class="footer_contact_input" placeholder="Nom" required="required">
                  <input type="email" class="footer_contact_input" placeholder="E-mail" required="required">
                </div>
                <textarea class="footer_contact_input footer_contact_textarea" placeholder="Message" required="required"></textarea>
                <button class="footer_contact_button">Envoyer</button>
              </form>
            </div>
          </div>
        </div>

        <!-- Footer Hours -->
        <div class="col-lg-4 footer_col">
          <div class="footer_hours">
            <div class="footer_hours_title">Opening Hours</div>
            <ul class="hours_list">
              <li class="d-flex flex-row align-items-center justify-content-start">
                <div>Monday – Thursday</div>
                <div class="ml-auto">8.00 – 19.00</div>
              </li>
              <li class="d-flex flex-row align-items-center justify-content-start">
                <div>Friday</div>
                <div class="ml-auto">8.00 - 18.30</div>
              </li>
              <li class="d-flex flex-row align-items-center justify-content-start">
                <div>Saturday</div>
                <div class="ml-auto">9.30 – 17.00</div>
              </li>
              <li class="d-flex flex-row align-items-center justify-content-start">
                <div>Sunday</div>
                <div class="ml-auto">9.30 – 15.00</div>
              </li>
            </ul>
          </div>
        </div>
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
              <span>{{ $project->ProjectNumber }}</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
