<div class="info_form_container">
  <div class="info_form_title">{{ $title }}</div>
  <form action="#" class="info_form" id="info_form">
    <select name="info_form_dep" id="info_form_dep" class="info_form_dep info_input info_select">
      <option>Department</option>
      <option>Department</option>
      <option>Department</option>
    </select>
    <select name="info_form_doc" id="info_form_doc" class="info_form_doc info_input info_select">
      @foreach ($personnel as $key => $value)
        <option value="{{ $value }}">{{ ucfirst($value) }}</option>
      @endforeach
    </select>
    <input type="text" class="info_input" placeholder="Name" required="required">
    <input type="text" class="info_input" placeholder="Phone No">
    <button class="info_form_button">Prendre rendez-vous</button>
  </form>
</div>
