@extends('health.landing.index.layout')

@section('content')
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
            <th> Nom</th>
            <th> Téléphone</th>
            <th> Email</th>
            <th>Role</th>
            <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $key => $user)
            <tr>
                <td>{{ $key +1 }}</td>
                <td>{{ $user->prenom }} {{ $user->nom }}</td>
                <td>{{ $user->tel }}</td>
                <td>{{ $user->mail }}</td>
                <td>{{ $user->role }}</td>
                <td>
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-delete"></i>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
