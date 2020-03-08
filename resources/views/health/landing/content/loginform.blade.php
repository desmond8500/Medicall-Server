

<style>
    .services{
        height: 350px;
        margin-bottom: 20px;
    }
    .servicetitle{
        text-align: center;
        padding-top: 5px;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center">Connexion</h2>
        </div>
        <div class="col-md-4 offset-md-4">
            <form action="/login" method="POST">
                @csrf
                <div class="form-group">
                    <label>Téléphone</label>
                    <input type="text" class="form-control" name="tel">
                </div>
                <div class="form-group">
                    <label>Mot de passe</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button class="btn btn-primary ">Valider</button>
            </form>
        </div>
    </div>
</div>
