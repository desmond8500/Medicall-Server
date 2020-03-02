
<div class="home_container">
    <div class="container">
        <div class="row">
        <div class="col">
            <div class="home_content">
            <div class="home_title">{{ $home->title }}</div>
            <div class="home_text">{{ $home->text }}</div>
            <div class="home_text">{{ $home->text2 }}</div>
                <div type="button" class="button home_button" data-toggle="modal" data-target=".bd-example-modal-lg">
                    <a>
                        <span>Prendre un rendez-vous</span>
                        <span>Prendre un rendez-vous</span>
                    </a>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>


<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      ...
    </div>
  </div>
</div>
