

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3>Medicall</h3>
            <p>
                Vous pouvez nous laisser un message sur le formulaire à coté ....
            </p>
            <p>Rejoiniez nous sour les réseaux sociaux suivants :</p>
            <a href="" class="text-white">
                <i class="fa fa-facebook btn"></i>
            </a>
            <a href="" class="text-white">
                <i class="fa fa-twitter btn"></i>
            </a>
            <a href="" class="text-white">
                <i class="fa fa-linkedin btn"></i>
            </a>

        </div>
        <div class="col-md-6">
            <form action="/comentaires" method="post" class="row">
                @csrf
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control" name="nom" placeholder="Nom">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="tel" placeholder="Téléphone">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="tel" placeholder="Email">
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="form-group ">
                        <textarea name="message" class="form-control" placeholder="Votre messsage"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-light">Envoyer</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
