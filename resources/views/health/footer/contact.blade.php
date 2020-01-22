<div class="col-lg-5 footer_col">
  <div class="footer_contact">
    <div class="footer_contact_title">Contactez-Nous</div>
    <div class="footer_contact_form_container">
      <form action="/commentaires"method="post" class="footer_contact_form" id="footer_contact_form">
        @csrf
        <div class="d-flex flex-xl-row flex-column align-items-center justify-content-between">
          <input type="text" class="footer_contact_input" placeholder="Nom" required="required" name="nom">
          <input type="email" class="footer_contact_input" placeholder="E-mail" required="required" name="mail">
        </div>
        <textarea class="footer_contact_input footer_contact_textarea" placeholder="Message" required="required" name="message"></textarea>
        <button class="footer_contact_button">Envoyer</button>
      </form>
    </div>
  </div>
</div>
