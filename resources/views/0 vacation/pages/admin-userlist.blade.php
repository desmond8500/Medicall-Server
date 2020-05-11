@extends('0 vacation.layout')

@section('link')

@endsection

@section('adminmenu')
    {{-- <a href="{{route('admin.index')}}"
        class="d-flex align-items-center justify-content-center">
        <span class="fa fa-user"><i class="sr-only">Facebook</i></span>
    </a> --}}

@endsection

@section('content')
{{-- @include('0 vacation.section.call_to_action2',['title'=>'Admin' , 'image'=>'src/images/wallpaper/services.jpg']) --}}
    <section class="container">
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
                        <a href=""><i class="fa fa-edit"></i></a>
                        <i class="fa fa-trash"></i>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection

@section('script')

@endsection
