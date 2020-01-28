<div class="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="info_form_container">
          <div class="info_form_title">Inscription</div>
          <form action="/comptes" method="post" class="info_form" id="info_form">
            @csrf
            <input type="text" class="info_input" name="prenom" placeholder="Prénom" required="required">
            <input type="text" class="info_input" name="nom" placeholder="Nom" required="required">
            <input type="text" class="info_input" name="pseudo" placeholder="Pseudo" required="required">
            <input type="text" class="info_input" name="pass" placeholder="Mot de passe" required="required">
            <input type="text" class="info_input" name="tel" placeholder="Téléphone" required="required">

            <select id="info_form_dep" class="info_form_dep info_input info_select" name="genre">
              <option value="Homme">Homme</option>
              <option value="Femme">Femme</option>
            </select>

            <button class="info_form_button" type="submit">Inscription</button>
          </form>
        </div>
      </div>

    </div>
  </div>
</div>
