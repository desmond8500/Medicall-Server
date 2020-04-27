{{-- <div class="hero-wrap js-fullheight" style="background-image: url('{{asset('src/images/wallpaper/soins-a-domicile.jpg')}}');" data-stellar-background-ratio="0.5"> --}}
{{-- <div class="hero-wrap js-fullheight" style="background-image: url('{{asset('src/images/wallpaper/infirmière.jpg')}}');" data-stellar-background-ratio="0.5"> --}}
<div class="hero-wrap js-fullheight" style="background-image: url('{{asset('src/images/wallpaper/mains.jpg')}}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate">
            <h2 class="subheading">Bienvenue sur Medicall</h2>
            <h1 class="mb-4">Des soins chez vous en un click</h1>
            <p><a href="#" class="btn btn-primary">Plus d'insformation</a> <a href="#" class="btn btn-white">Contactez-Nous</a></p>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-book ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-4">
                <form action="{{url('')}}" class="appointment-form">
                    @csrf
                    <h3 class="mb-3">Prendre un rendez-vous</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="nom" class="form-control" placeholder="Nom">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="mail" name="mail" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="tel" class="form-control" placeholder="tel" placeholder="Téléphone">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                        <select name="besoin" id="" class="form-control">
                                            <option>Besoin</option>
                                            <option value="1">Infirmier</option>
                                            <option value="2">Sage-femme</option>
                                            <option value="3">Kinesitérapeute</option>
                                            <option value="4">Rejoindre notre équipe</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea name="description" class="form-control" name="description" placeholder="Description du besoin" cols="10" rows="4"></textarea>
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
