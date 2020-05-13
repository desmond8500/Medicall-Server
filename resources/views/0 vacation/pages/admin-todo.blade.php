@extends('0 vacation.layout')

@section('link')

@endsection

@section('nav2')
    @include('0 vacation.component.admin-nav')
@endsection

@section('content')
<section class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="table-responsive mt-4">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th class="text-center">#</th>
                            <th> Nom </th>
                            <th> Description </th>
                            <th> Catégorie </th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $todo)
                        <tr>
                            <td class="text-center">{{ $key + 1 }}</td>
                            <td>
                                <a href="{{route('admin.todolist',['id'=>$todo->id])}}">{{ $todo->name }}</a>
                            </td>
                            <td>{{ $todo->description }}</td>
                            <td>{{ $todo->categorie }}</td>
                            <td>
                                @auth
                                    @include('0 vacation.modal.edittodo')
                                    <form action="{{route('todos.destroy',['todo'=> $todo])}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>
                                    @else
                                    <a href="{{route('v-login')}}" class="btn btn-primary btn-block">Connexion</a>
                                @endauth
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-4">
            @auth
            <form action="{{route('todos.store')}}" method="post" class="mt-4 mb-4">
                @csrf
                <input type="text" name="user_id" hidden value="{{$user->id}}">
                <div class="form-group">
                    <label for="">Titre</label>
                    <input type="text" class="form-control" name="name" placeholder="Titre" required>
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="description" name="description" class="form-control" cols="30" rows="10" required></textarea>
                </div>
                <div class="form-group">
                    <label for="">Catégories</label>
                    <select name="categorie" class="form-control">
                        <option>A faire</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Valider</button>

            </form>
                @else
                <img src="{{asset('src/images/img/undraw_authentication_fsn5.png')}}" alt="" class="img-fluid">
                <a href="{{route('v-login')}}" class="btn btn-primary btn-block mb-4">Connectez-vous</a>
            @endauth
        </div>
    </div>

</section>
@endsection

@section('script')

@endsection
