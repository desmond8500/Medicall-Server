<style>
    .but{
        heigth: 130px;
    }


</style>

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
      <div class="col-lg-4 info_box_col">
        <div class="info_form_container">
          <div class="info_form_title">Prendre un rendez-vous</div>
          <hr>
          <form action="#" class="info_form" id="info_form">
            <select name="info_form_dep" id="info_form_dep" class="info_form_dep info_input info_select">
              <option value="infirmier">Infirmier</option>
              <option value="sagefemme">Sage Femme</option>
              <option value="kinesitherapeute">Kinésithérapeute</option>
            </select>
            <select name="info_form_dep" id="info_form_dep" class="info_form_dep info_input info_select">
              <option value="infirmier">Infirmier</option>
              <option value="sagefemme">Sage Femme</option>
              <option value="kinesitherapeute">Kinésithérapeute</option>
            </select>
            <input type="text" class="info_input" placeholder="Prénom" required="required">
            <input type="text" class="info_input" placeholder="Nom" required="required">
            <input type="tel" class="info_input" placeholder="Numéro de téléphone" required="required">
            <button class="info_form_button ">make an appointment</button>
                <div class="but"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
