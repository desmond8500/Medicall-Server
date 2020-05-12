<div class="row">
    <div class="col-md-8">
        <img src="{{asset('src/images/img/undraw_hire_te5y.png')}}" alt="" class="img-fluid">
        <h3>Vous êtes prêts à exercer le métier d'infirmier libéral ? Rejoignez nous !!!</h3>
        <p>
            Nous recrutons actuellement des infimiers, des sage-femmes et des kinésithérapeutes. <br>
            L'idée c'est de vous permettre d'exercer votre métier prez de chez vous. Ainsi vous serez utile à votre collectivité tout en trouvant votre
            compte sur le plan professionnel.
        </p>
        <p>
            <h4>Conditions</h4>
            <ul>
                <li>Etre diplomé</li>
                <li>Etre disponible au moins pendant une partie de la journée</li>
            </ul>
        </p>
    </div>
    <div class="col-md-4">
        <form action="{{url('inscriptions')}} " method="post">
            @csrf

            <div class="form-group">
                <label for="">Nom</label>
                <input type="text" name="nom" class="form-control" placeholder="Prénom et nom">
            </div>
            <div class="form-group">
                <label for="">Téléphone</label>
                <input type="text" name="tel" class="form-control" placeholder="Numéro de téléphone">
            </div>
            <div class="form-group">
                <label for="">CV</label>
                <input type="file" name="cv" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Résumé</label>
                <textarea name="resume" cols="30" rows="10" class="form-control" placeholder="Présentez-vous, dites nous vos attentes ..."></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Envoyer</button>

        </form>
    </div>
</div>
