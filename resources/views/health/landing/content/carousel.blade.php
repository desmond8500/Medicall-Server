@php
    $carousel[] = array('title'=>'', 'description'=> '', 'image'=> 'health/images/matheus-ferrero-yfmjALh1S6s-unsplash.jpg');
    $carousel[] = array('title'=>'', 'description'=> '', 'image'=> 'health/images/meghan-schiereck-_XFObcM_7KU-unsplash.jpg');
    $carousel[] = array('title'=>'', 'description'=> '', 'image'=> 'health/images/soins-a-domicile.jpg');

    $imagesize = ''

@endphp

<style>
    .carouselpara{
        padding-bottom: 20px;
    }
</style>

<div class="row">
    <div class="col-md-4">
        <div class="container carouselpara">
            <p>
                Medicall est un service d'assistance médicale à domicile. <br>
                Nous mettons à votre disposition des infirmier et des sages femmes qui vont vous
                aider à suivre votre traitement chez vous.
            </p>
            <a href="" class="btn btn-primary"> Plus d'informations</a>
        </div>
    </div>
    <div class="col-md-8">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                    @for ($i=0 ; $i< count($carousel) ; $i++)
                        @if ($i==0)
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        @else
                            <li data-target="#carouselExampleCaptions" data-slide-to="{{ $i }}"></li>
                        @endif
                    @endfor
            </ol>
            <div class="carousel-inner">
                    @foreach ($carousel as $key => $item)
                        <div class="carousel-item @if ($loop->first)active @endif">
                            <img src="{{ asset($item['image']) }}" class="d-block w-100" height="400px"  alt="{{ asset($item['image']) }}">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>{{$key}}</h5>
                                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                        </div>
                    @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>
</div>
