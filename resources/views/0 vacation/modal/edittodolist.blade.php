<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
    <i class="fa fa-edit"></i>
</button>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content container">
      {{-- ====================================================================================== --}}
        <h2 class="text-center">Modifier une tache</h2>

        <form action="{{route('todolists.update',['todolist'=>$todolist])}}" method="post" class="mt-4 mb-4">
            @csrf
            @method('put')
            <input type="text" name="user_id" hidden value="{{$todolist->user_id}}">
            <input type="text" name="task_id" hidden value="{{$todolist->task_id}}">
            <div class="form-group">
                <label for="">Titre</label>
                <input type="text" class="form-control" name="title" value="{{$todolist->title}}" required>
            </div>
            <div class="form-group">
                <label for="">Statut</label>
                <select name="status" class="form-control">
                    <option>{{$todolist->status}}</option>
                    <option>Nouvelle</option>
                    <option>En cours</option>
                    <option>En pause</option>
                    <option>Terminé</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Valider</button>

        </form>



        <hr>
      {{-- ====================================================================================== --}}
    </div>
  </div>
</div>
