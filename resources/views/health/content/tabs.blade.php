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
                        <div class="tab_list_title">Soins à domicile</div>
                        <div class="tab_list_text"><p>
                          Grace à notre plateforme vous pouvez trouver un professionel de santé qui puisse prodiguer
                          des soins à vous et à vos proches à domicile.
                        </p></div>
                      </li>
                      <li>
                        <div class="tab_list_title">Application Web et Mobile</div>
                        <div class="tab_list_text"><p>
                          Nous avons developpé une application web et mobile qui vous permet de :
                          <ul>
                            <li>Trouver des infirmiers en ligne</li>
                            <li>De suivre et de gérer les traitements à travers votre compte </li>
                            <li>Consulter ou donner des avis</li>
                          </ul>
                        </p></div>
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
                    <div class="tab_list_title">Vous travaillez dans le domaine médical ?</div>
                    <div class="tab_list_text">
                      <p>
                        Vous pouvez rehoindre notre équipe et faire profiter de vos services à des
                        milliers de patients à travers le pays.
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="tab_list_title">Interface de gestion</div>
                    <div class="tab_list_text">
                      <p>
                        Nous mettons à disposition du personnel médical une plateforme personnalisée qui permet
                        de gérer les patients et de les assister dans l'exécution de leur taches.
                      </p>
                    </div>
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
