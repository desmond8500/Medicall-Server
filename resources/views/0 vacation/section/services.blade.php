<section class="ftco-section ftco-services">
    <div class="container">
        <div class="row">
            @foreach ($services as $service)
                <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
                    <div class="d-block services-wrap text-center">
                        <div class="img" style="background-image: url({{asset($service->image)}});"></div>
                        <div class="media-body py-4 px-3">
                            <h3 class="heading">{{ $service->title}}</h3>
                            <p>{{ $service->description }}</p>
                            {{-- <p><a href="{{ route($service->route)}}" class="btn btn-primary">{{ $service->bouton}}</a></p> --}}
                            @include('0 vacation.modal.button',['id'=>$service->id])
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
