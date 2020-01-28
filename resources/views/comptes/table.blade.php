<div class="table-responsive-sm">
    <table class="table table-striped" id="comptes-table">
        <thead>
            <th>Pseudo</th>
        <th>Pass</th>
        <th>Tel</th>
        <th>Prenom</th>
        <th>Nom</th>
        <th>Genre</th>
            <th colspan="3">Action</th>
        </thead>
        <tbody>
        @foreach($comptes as $compte)
            <tr>
                <td>{{ $compte->pseudo }}</td>
            <td>{{ $compte->pass }}</td>
            <td>{{ $compte->tel }}</td>
            <td>{{ $compte->prenom }}</td>
            <td>{{ $compte->nom }}</td>
            <td>{{ $compte->genre }}</td>
                <td>
                    {!! Form::open(['route' => ['comptes.destroy', $compte->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('comptes.show', [$compte->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('comptes.edit', [$compte->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>