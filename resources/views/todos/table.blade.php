<div class="table-responsive-sm">
    <table class="table table-striped" id="todos-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Description</th>
        <th>User Id</th>
        <th>Categorie</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($todos as $todo)
            <tr>
                <td>{{ $todo->name }}</td>
            <td>{{ $todo->description }}</td>
            <td>{{ $todo->user_id }}</td>
            <td>{{ $todo->categorie }}</td>
                <td>
                    {!! Form::open(['route' => ['todos.destroy', $todo->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('todos.show', [$todo->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('todos.edit', [$todo->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>