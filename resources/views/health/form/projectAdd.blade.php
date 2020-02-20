<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Ajouter un Projet</h3>
    </div>
    <form class="form-horizontal" action="/projets" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group row">
                <div class="col-sm-6">
                    <label>ID Client</label>
                    <input type="text" name="id_client" class="form-control" value="{{ $form->id }}">

                    <label>Nom du Projet</label>
                    <input type="text" name="nom" class="form-control" placeholder="Nom ">

                    <label>Status du Projet</label>
                    <select name="status" id="" class="form-control" >
                        <option value="Nouveau">Nouveau</option>
                        <option value="En cours">En cours</option>
                        <option value="Terminé">Terminé</option>
                    </select>
                </div>
                <div class="col-sm-6">
                    <label>Description</label>
                    <textarea cols="30" rows="10" class="form-control" name="description" placeholder="Description"></textarea>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-info">Ajouter</button>
            {{-- <button type="submit" class="btn btn-default float-right">Annuler</button> --}}
        </div>
    </form>
</div>

