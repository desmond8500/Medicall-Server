<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Ajouter un Client</h3>
    </div>
    <form class="form-horizontal" action="/clients" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group row">
                <div class="col-sm-6">
                    <label>Nom</label>
                    <input type="text" name="nom" class="form-control" placeholder="Nom">
                </div>
                <div class="col-sm-6">
                    <label>Logo</label>
                    <input type="file" class="form-control"  name="logo">
                </div>
                <div class="col-sm-6">
                    <label>Description</label>
                    <textarea cols="30" rows="10" class="form-control" name="description"></textarea>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-info">Ajouter</button>
            {{-- <button type="submit" class="btn btn-default float-right">Annuler</button> --}}
        </div>
    </form>
</div>

