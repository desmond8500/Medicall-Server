@extends('health.landing.index.layout')

@section('content')
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
            <th> Nom</th>
            <th> Téléphone</th>
            <th> Email</th>
            <th>Message</th>
            <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key => $user)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $user->nom }}</td>
                <td>{{ $user->tel }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->message }}</td>
                <td>
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-delete"></i>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
