<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Les derniers articles publiés</h2>
            <span class="subheading">Informations &amp; Blog</span>
            </div>
        </div>
        <div class="row d-flex">
            @foreach ($posts as $post)
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20 rounded" style="background-image: url('{{ $post->featured_image }}');">
                        </a>
                        <div class="text p-4 text-center">
                        <h3 class="heading"><a href="{{ route('blogpage',['id'=>$post->id])}}">{{ $post->title }}</a></h3>
                        <div class="meta mb-2">
                            <div><a href="#">{{ $post->date }}</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                        </div>
                        <p>{{ $post->summary }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20 rounded" style="background-image: url('{{asset('vacationrental/images/image_2.jpg')}}');">
                    </a>
                    <div class="text p-4 text-center">
                    <h3 class="heading"><a href="#">Work Hard, Party Hard in a Luxury Chalet in the Alps</a></h3>
                    <div class="meta mb-2">
                        <div><a href="#">January 30, 2020</a></div>
                        <div><a href="#">Admin</a></div>
                        <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                    </div>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20 rounded" style="background-image: url('{{asset('vacationrental/images/image_3.jpg')}}');">
                    </a>
                    <div class="text p-4 text-center">
                    <h3 class="heading"><a href="#">Work Hard, Party Hard in a Luxury Chalet in the Alps</a></h3>
                    <div class="meta mb-2">
                        <div><a href="#">January 30, 2020</a></div>
                        <div><a href="#">Admin</a></div>
                        <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                    </div>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>
