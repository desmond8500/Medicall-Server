<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
    <i class="fa fa-edit"></i>
</button>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content container">
      {{-- ====================================================================================== --}}
        <h2 class="text-center">Modifier utilisateur</h2>
        <form action="{{route('admin.user.update')}}" method="POST">
            @csrf
            <input type="text" class="form-control" name="role" hidden value="{{ $user->role }}">
            <input type="text" class="form-control" name="id" hidden value="{{ $user->id }}">
            <div class="row" >
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Prénom</label>
                        <input type="text" class="form-control" name="prenom" value="{{ $user->prenom }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nom</label>
                        <input type="text" class="form-control" name="nom" value="{{ $user->nom }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Téléphone</label>
                        <input type="tel" class="form-control" name="tel" value="{{ $user->tel }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Role</label>
                        <select name="role" class="form-control">
                            <option> {{ $user->role }} </option>
                            <option> admin </option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Mot de passe</label>
                        <input type="password" class="form-control" name="password" placeholder="mot de passe" value="{{ $user->password }}">
                    </div>
                </div>

            </div>
            <button class="btn btn-primary mb-15">Valider</button>
        </form>
        <hr>
      {{-- ====================================================================================== --}}
    </div>
  </div>
</div>
