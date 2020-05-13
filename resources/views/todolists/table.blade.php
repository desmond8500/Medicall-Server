<div class="table-responsive-sm">
    <table class="table table-striped" id="todolists-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Status</th>
        <th>Task Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($todolists as $todolist)
            <tr>
                <td>{{ $todolist->title }}</td>
            <td>{{ $todolist->status }}</td>
            <td>{{ $todolist->task_id }}</td>
                <td>
                    {!! Form::open(['route' => ['todolists.destroy', $todolist->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('todolists.show', [$todolist->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('todolists.edit', [$todolist->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>