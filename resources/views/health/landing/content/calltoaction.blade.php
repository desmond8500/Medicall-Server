<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('health/images/meghan-schiereck-_XFObcM_7KU-unsplash.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body bg-light">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">S'inscrire</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('health/images/hush-naidoo-pA0uoltkwao-unsplash.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body bg-light">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">S'inscrire</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    Prendre un rendez-vous
                </div>
                <div class="card-body">
                    <form action="/rendezvous" method="post">
                        @csrf
                        <div class="form-group">
                            <label></label>
                            <select name="" class="form-control">
                                <option value="Infirmier">Infirmier</option>
                                <option value="Sage-femme">Sage-femme</option>
                                <option value="Kinésithérapeute">Kinésithérapeute</option>
                                <option value="Aide-soignant">Aide-soignant</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nom</label>
                            <input type="text" class="form-control" name="nom">
                        </div>
                        <div class="form-group">
                            <label>Téléphone</label>
                            <input type="text" class="form-control" name="tel">
                        </div>
                        <button type="submit" class="btn btn-primary">Valider</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
