<div class="table-responsive-sm">
    <table class="table table-striped" id="rvs-table">
        <thead>
            <tr>
                <th>Nom</th>
        <th>Email</th>
        <th>Tel</th>
        <th>Besoin</th>
        <th>Description</th>
        <th>Statut</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($rvs as $rv)
            <tr>
                <td>{{ $rv->nom }}</td>
            <td>{{ $rv->email }}</td>
            <td>{{ $rv->tel }}</td>
            <td>{{ $rv->besoin }}</td>
            <td>{{ $rv->description }}</td>
            <td>{{ $rv->statut }}</td>
                <td>
                    {!! Form::open(['route' => ['rvs.destroy', $rv->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('rvs.show', [$rv->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('rvs.edit', [$rv->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>