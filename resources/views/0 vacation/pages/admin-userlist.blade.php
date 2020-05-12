@extends('0 vacation.layout')

@section('link')

@endsection

@section('nav2')
    @include('0 vacation.component.admin-nav')
@endsection

@section('content')
{{-- @include('0 vacation.section.call_to_action2',['title'=>'Admin' , 'image'=>'src/images/wallpaper/services.jpg']) --}}
    <section class="container">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center">#</th>
                        <th> Nom</th>
                        <th> Téléphone</th>
                        <th> Email</th>
                        <th>Role</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $user)
                    <tr>
                        <td class="text-center">{{ $key + 1 }}</td>
                        <td>{{ $user->prenom }} {{ $user->nom }}</td>
                        <td>{{ $user->tel }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td>
                            @include('0 vacation.modal.editUser')
                            <a href="{{route('admin.user.delete',['id'=> $user->id])}} " class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection

@section('script')

@endsection
