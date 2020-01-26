<div class="info">
  <div class="container">
    <div class="row row-eq-height">

      <!-- Info Box -->
      @foreach ($project->ProjectInfobox as $key => $value)
        <div class="col-lg-4 info_box_col">
          <div class="info_box">
            <div class="info_image"><img src="{!! asset($value->image) !!}" alt=""></div>
            <div class="info_content">
              <div class="info_title">{{ $value->title }}</div>
              <div class="info_text">
                {{ $value->text }}
              </div>
              <div class="button info_button"><a href="{!! route($value->route) !!}"><span>{{ $value->button }}</span><span>read more</span></a></div>
            </div>
          </div>
        </div>

      @endforeach

      <!-- Info Form -->
      {{-- <div class="col-lg-4 info_box_col">
        <div class="info_form_container">
          <div class="info_form_title">Créez un compte</div>
          <form action="#" class="info_form" id="info_form">
            <select name="info_form_dep" id="info_form_dep" class="info_form_dep info_input info_select">
              <option value="patient">Patient</option>
              <option value="infirmier">Infirmier</option>
            </select>
             <select name="info_form_doc" id="info_form_doc" class="info_form_doc info_input info_select">
              <option>Doctor</option>
              <option>Doctor</option>
              <option>Doctor</option>
            </select>
            <input type="text" class="info_input" placeholder="Nom" required="required">
            <input type="tel" class="info_input" placeholder="Numéro de téléphone" required="required">
            <input type="mail" class="info_input" placeholder="E mail">

            <button class="info_form_button">S'inscrire</button>
            <a href="#" class="inscrit">Déja Inscrit ?</a>
          </form>
        </div>
      </div> --}}
    </div>
  </div>
</div>
