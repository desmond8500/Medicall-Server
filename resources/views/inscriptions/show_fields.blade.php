<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $inscription->id }}</p>
</div>

<!-- Nom Field -->
<div class="form-group">
    {!! Form::label('nom', 'Nom:') !!}
    <p>{{ $inscription->nom }}</p>
</div>

<!-- Tel Field -->
<div class="form-group">
    {!! Form::label('tel', 'Tel:') !!}
    <p>{{ $inscription->tel }}</p>
</div>

<!-- Cv Field -->
<div class="form-group">
    {!! Form::label('cv', 'Cv:') !!}
    <p>{{ $inscription->cv }}</p>
</div>

<!-- Resume Field -->
<div class="form-group">
    {!! Form::label('resume', 'Resume:') !!}
    <p>{{ $inscription->resume }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $inscription->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $inscription->updated_at }}</p>
</div>

