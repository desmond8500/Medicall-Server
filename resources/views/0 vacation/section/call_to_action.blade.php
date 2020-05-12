{{-- <div class="hero-wrap js-fullheight" style="background-image: url('{{asset('src/images/wallpaper/soins-a-domicile.jpg')}}');" data-stellar-background-ratio="0.5"> --}}
{{-- <div class="hero-wrap js-fullheight" style="background-image: url('{{asset('src/images/wallpaper/infirmière.jpg')}}');" data-stellar-background-ratio="0.5"> --}}
<div class="hero-wrap js-fullheight" style="background-image: url('{{asset('src/images/wallpaper/mains.jpg')}}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate">
            <h2 class="subheading">Bienvenue sur Medicall</h2>
            <h1 class="mb-4">Des soins médicaux de qualité chez vous en un click</h1>
            <p>
                <a href="{{route('apropos')}}" class="btn btn-primary mb-3">Plus d'informations</a>
                <a href="{{route('contact')}}" class="btn btn-white">Contactez-Nous</a></p>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-book ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-4">
                <form action="{{route('rvs.store')}}" method="POST" class="appointment-form">
                    @csrf
                    <h3 class="mb-3">Prendre un rendez-vous</h3>
                    <input type="text" name="statut" value="Nouveau" hidden>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="nom" class="form-control" placeholder="Nom">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="tel" name="tel" class="form-control" placeholder="Téléphone">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                        <select name="besoin" class="form-control">
                                            <option>Besoin</option>
                                            <option>Infirmier</option>
                                            <option>Sage-femme</option>
                                            <option>Kinesitérapeute</option>
                                            <option>Rejoindre notre équipe</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea name="description" class="form-control" placeholder="Description du besoin" cols="10" rows="4"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" value="Envoyer" class="btn btn-primary py-3 px-4">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
