@extends('0 vacation.layout')

@section('link')

@endsection

@section('nav2')
    @include('0 vacation.component.admin-nav')
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
                    <th> Cv</th>
                    <th> Resume</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key => $item)
                <tr>
                    <td class="text-center">{{ $key + 1 }}</td>
                    <td>{{ $item->nom }}</td>
                    <td>{{ $item->tel }}</td>
                    <td>{{ $item->cv }}</td>
                    <td>{{ $item->resume }}</td>
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
    </section>
@endsection

@section('script')

@endsection
