<div class="tabs_container">
  <div class="container">
    <div class="row">
      <div class="col-lg-5">

        <!-- Tabs -->
        <div class="tabs d-flex flex-row align-items-center justify-content-start flex-wrap">
          @foreach ($tabs[0] as $key => $tab)
            @if ($loop->first)
              <div class="tab active">
            @else
              <div class="tab">
            @endif
              <div class="tab_title">{{ $tab->titre }}</div>
              <div class="tab_text">{{ $tab->description }}</div>
            </div>
          @endforeach
        </div>
      </div>
      <div class="col-lg-7">

        <!-- Panels -->
        <div class="tab_panels">

          <!-- Panel -->
          <div class="tab_panel active">
            <div class="tab_panel_content">
              <div class="row">
                <div class="col-lg-5">
                  <div class="tab_image"><img src="{!! asset('health/images/tabs.jpg') !!}" alt=""></div>
                </div>
                <div class="col-lg-7">
                  <div class="tab_list">
                    <ul>
                      <li>
                        <div class="tab_list_title">Cardiology</div>
                        <div class="tab_list_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem maximus malesuad.</p></div>
                      </li>
                      <li>
                        <div class="tab_list_title">Gastroenterology</div>
                        <div class="tab_list_text"><p>Donec malesuada lorem maximus mauris scele risque, at rutrum nulla dictum.</p></div>
                      </li>
                      <li>
                        <div class="tab_list_title">Medical Lab</div>
                        <div class="tab_list_text"><p>Lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus.</p></div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Panel -->
          <div class="tab_panel">
            <div class="tab_panel_content">
              <div class="tab_list">
                <ul>
                  <li>
                    <div class="tab_list_title">Cardiology</div>
                    <div class="tab_list_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem maximus malesuad.</p></div>
                  </li>
                  <li>
                    <div class="tab_list_title">Gastroenterology</div>
                    <div class="tab_list_text"><p>Donec malesuada lorem maximus mauris scele risque, at rutrum nulla dictum.</p></div>
                  </li>
                  <li>
                    <div class="tab_list_title">Medical Lab</div>
                    <div class="tab_list_text"><p>Lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus.</p></div>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Panel -->
          <div class="tab_panel">
            <div class="tab_panel_content">
              <div class="tab_list">
                <ul>
                  <li>
                    <div class="tab_list_title">Cardiology</div>
                    <div class="tab_list_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem maximus malesuad.</p></div>
                  </li>
                  <li>
                    <div class="tab_list_title">Gastroenterology</div>
                    <div class="tab_list_text"><p>Donec malesuada lorem maximus mauris scele risque, at rutrum nulla dictum.</p></div>
                  </li>
                  <li>
                    <div class="tab_list_title">Medical Lab</div>
                    <div class="tab_list_text"><p>Lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus.</p></div>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Panel -->
          <div class="tab_panel">
            <div class="tab_panel_content">
              <div class="tab_list">
                <ul>
                  <li>
                    <div class="tab_list_title">Cardiology</div>
                    <div class="tab_list_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem maximus malesuad.</p></div>
                  </li>
                  <li>
                    <div class="tab_list_title">Gastroenterology</div>
                    <div class="tab_list_text"><p>Donec malesuada lorem maximus mauris scele risque, at rutrum nulla dictum.</p></div>
                  </li>
                  <li>
                    <div class="tab_list_title">Medical Lab</div>
                    <div class="tab_list_text"><p>Lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus.</p></div>
                  </li>
                </ul>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
