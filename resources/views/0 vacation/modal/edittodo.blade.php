<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".editTodo{{ $todo->id}}">
    <i class="fa fa-edit"></i>
</button>

<div class="modal fade editTodo{{ $todo->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content container">
      {{-- ====================================================================================== --}}
        <h2 class="text-center">Modifier une tasklist</h2>

        <form action="{{route('todos.update',['todo'=>$todo])}}" method="post" class="mt-4 mb-4">
            @csrf
            @method('put')
            <input type="text" name="user_id" hidden value="{{$todo->user_id}}">
            <div class="form-group">
                <label for="">Titre</label>
                <input type="text" class="form-control" name="name" value="{{$todo->name}}" required>
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <textarea name="description" name="description" class="form-control" cols="30" rows="10" required>{{$todo->description}}</textarea>
            </div>
            <div class="form-group">
                <label for="">Catégories</label>
                <select name="categorie" class="form-control">
                    <option>{{$todo->categorie}}</option>
                    <option>A faire</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Valider</button>

        </form>



        <hr>
      {{-- ====================================================================================== --}}
    </div>
  </div>
</div>
