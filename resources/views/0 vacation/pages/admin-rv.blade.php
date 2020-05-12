@extends('0 vacation.layout')

@section('link')

@endsection

@section('nav2')
    @include('0 vacation.component.admin-nav')
@endsection

@section('content')
<section class="container">
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th class="text-center">#</th>
                <th> Nom</th>
                <th> Téléphone</th>
                <th> Email</th>
                <th>Besoin</th>
                <th>>Description</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key => $user)
            <tr>
                <td class="text-center">{{ $key + 1 }}</td>
                <td>{{ $user->nom }}</td>
                <td>{{ $user->tel }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->besoin }}</td>
                <td>{{ $user->Description }}</td>
                <td>
                    {{-- @include('0 vacation.modal.editUser')
                    <a href="{{route('admin.user.delete',['id'=> $user->id])}} " class="btn btn-danger">
                        <i class="fa fa-trash"></i>
                    </a> --}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endsection

@section('script')

@endsection
