<section class="ftco-section bg-light">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-6 wrap-about">
                <div class="img img-2 mb-4" style="background-image: url({{asset('src/images/wallpaper/christina.jpg')}});">
                </div>
                <h2>Vision et mission</h2>
                <p>
                    Nous avons pour objectifs de faciliter l'accès au soins à la population sénégalaise tout en permettant au personnel de santé de pouvoir exercer
                    leur métier dans de meilleurs conditions. Pour cela nous comptons désengorger les hopitaux en faisant en sortes que certains patients puissent recevoir
                    certains types de soins chez eux tout en bénéficiant d'un meilleur suivi médical.

                </p>
            </div>
            <div class="col-md-6 wrap-about ftco-animate">
                <div class="heading-section">
                    <div class="pl-md-5">
                        <h2 class="mb-2">Nos services</h2>
                    </div>
                </div>
                <div class="pl-md-5">
                    <p>
                        Ci dessous les services que nous proposons.
                    </p>
                    <div class="row">
                        @foreach ($offers as $offer)
                            <div class="services-2 col-lg-6 d-flex w-100">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="{{$offer->icon}}"></span>
                                </div>
                                <div class="media-body pl-3">
                                    <h3 class="heading">{{ $offer->title }}</h3>
                                    <p>{{ $offer->description }} </p>
                                </div>
                            </div>
                        @endforeach

            {{-- <div class="services-2 col-lg-6 d-flex w-100">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-workout"></span>
                </div>
                <div class="media-body pl-3">
                <h3 class="heading">Hot Showers</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
                </div>
            </div>
            <div class="services-2 col-lg-6 d-flex w-100">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-diet-1"></span>
                </div>
                <div class="media-body pl-3">
                <h3 class="heading">Laundry</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
                </div>
            </div>
            <div class="services-2 col-lg-6 d-flex w-100">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-first"></span>
                </div>
                <div class="media-body pl-3">
                <h3 class="heading">Air Conditioning</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
                </div>
            </div>
            <div class="services-2 col-lg-6 d-flex w-100">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-first"></span>
                </div>
                <div class="media-body pl-3">
                <h3 class="heading">Free Wifi</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
                </div>
            </div>
            <div class="services-2 col-lg-6 d-flex w-100">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-first"></span>
                </div>
                <div class="media-body pl-3">
                <h3 class="heading">Kitchen</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
                </div>
            </div>
            <div class="services-2 col-lg-6 d-flex w-100">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-first"></span>
                </div>
                <div class="media-body pl-3">
                <h3 class="heading">Ironing</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
                </div>
            </div>
            <div class="services-2 col-lg-6 d-flex w-100">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-first"></span>
                </div>
                <div class="media-body pl-3">
                <h3 class="heading">Lovkers</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
                </div>
            </div> --}}
            </div>
                </div>
            </div>
        </div>
    </div>
</section>





