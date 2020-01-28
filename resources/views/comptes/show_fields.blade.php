<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $compte->id }}</p>
</div>

<!-- Pseudo Field -->
<div class="form-group">
    {!! Form::label('pseudo', 'Pseudo:') !!}
    <p>{{ $compte->pseudo }}</p>
</div>

<!-- Pass Field -->
<div class="form-group">
    {!! Form::label('pass', 'Pass:') !!}
    <p>{{ $compte->pass }}</p>
</div>

<!-- Tel Field -->
<div class="form-group">
    {!! Form::label('tel', 'Tel:') !!}
    <p>{{ $compte->tel }}</p>
</div>

<!-- Prenom Field -->
<div class="form-group">
    {!! Form::label('prenom', 'Prenom:') !!}
    <p>{{ $compte->prenom }}</p>
</div>

<!-- Nom Field -->
<div class="form-group">
    {!! Form::label('nom', 'Nom:') !!}
    <p>{{ $compte->nom }}</p>
</div>

<!-- Genre Field -->
<div class="form-group">
    {!! Form::label('genre', 'Genre:') !!}
    <p>{{ $compte->genre }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $compte->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $compte->updated_at }}</p>
</div>

