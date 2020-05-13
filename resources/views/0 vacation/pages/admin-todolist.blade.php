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
                            <th> Tache </th>
                            <th> Statut </th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $todolist)
                        <tr>
                            <td class="text-center">{{ $key + 1 }}</td>
                            <td>{{ $todolist->title }}</td>
                            <td>{{ $todolist->status }}</td>
                            <td>
                                @auth
                                    @include('0 vacation.modal.edittodolist')
                                    <form action="{{route('todolists.destroy',['todolist'=> $todolist])}}" method="POST">
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
            <form action="{{route('todolists.store')}}" method="post" class="mt-4 mb-4">
                @csrf
                <input type="text" name="task_id" hidden value="{{$todo->id}}">
                <div class="form-group">
                    <label for="">Titre</label>
                    <input type="text" class="form-control" name="title" placeholder="Titre" required>
                </div>
                <input type="text" name="status" hidden value="Nouvelle">

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
