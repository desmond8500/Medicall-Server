
  <div class="contact_form">
    <div class="contact_title">{{ $titre }}</div>
    <div class="contact_form_container">
      <form action="/commentaires" method="post" id="contact_form" class="contact_form">
        @csrf
        <input type="text" id="contact_input" class="contact_input" placeholder="Votre nom" required="required" name="nom">
        <input type="email" id="contact_email" class="contact_input" placeholder="Mail" required="required" name="mail">
        {{-- <input type="text" id="contact_subject" class="contact_input" placeholder="Sujet" required="required"> --}}
        <textarea class="contact_input contact_textarea" id="contact_textarea" placeholder="Message" required="required" name="message"></textarea>
        <button class="contact_button" id="contact_button">Envoyer</button>
      </form>
    </div>
  </div>
