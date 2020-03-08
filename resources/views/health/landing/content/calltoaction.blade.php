<style>
    .paragraphe{
        height: 150px;
    }
    .formulaire{
        height: 32px;
    }
    .callcard{
        margin-bottom: 20px;
    }
</style>
<div class="container ">
    <div class="row">
        <div class="col-md-4">
            <div class="card w-150 callcard">
                <img src="{{ asset('health/images/meghan-schiereck-_XFObcM_7KU-unsplash.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body bg-light">
                    <h5 class="card-title">Utilisateurs</h5>
                    <p class="card-text text-justify paragraphe">
                        Vous pouvez nous contacter par téléphone, par message ou par mail afin de pouvoir bénéficier des services
                        de l'infirmier le plus proche de chez vous pour vous ou vos proches.
                    </p>
                    <a href="#" class="btn btn-primary btn-block">S'inscrire</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card w-150 callcard">
                <img src="{{ asset('health/images/hush-naidoo-pA0uoltkwao-unsplash.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body bg-light">
                    <h5 class="card-title">Professionel de la santé</h5>
                    <p class="card-text text-justify paragraphe">
                        Si vous êtes infirmier, Sage-femme, aide soignant ou kinésithérapeute vous pouvez rejoindre notre équipe de professionels.
                    </p>
                    <a href="#" class="btn btn-primary btn-block">Rejoignez-nous</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card w-150 callcard">
                <div class="card-body bg-light">
                    <h5 class="text-center">Prendre un rendez-vous</h5>
                    <hr>
                    <form action="/rendezvouses" method="post">
                        @csrf
                        <div class="form-group">
                            <label></label>
                            <select name="personnel" class="form-control">
                                <option value="Infirmier">Infirmier</option>
                                <option value="Sage-femme">Sage-femme</option>
                                <option value="Kinésithérapeute">Kinésithérapeute</option>
                                <option value="Aide-soignant">Aide-soignant</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nom</label>
                            <input type="text" class="form-control" name="nom" placeholder="Prénom et nom">
                        </div>
                        <div class="form-group">
                            <label>Téléphone</label>
                            <input type="tel" class="form-control" name="tel" placeholder="Numéro de téléphone">
                        </div>
                        <div class="form-group">
                            <label>E mail</label>
                            <input type="email" class="form-control" name="email" placeholder="Email / Facultatif">
                        </div>
                        <div class=" form-group formulaire">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Valider</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
