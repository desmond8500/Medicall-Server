<!-- Pseudo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pseudo', 'Pseudo:') !!}
    {!! Form::text('pseudo', null, ['class' => 'form-control']) !!}
</div>

<!-- Pass Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pass', 'Pass:') !!}
    {!! Form::text('pass', null, ['class' => 'form-control']) !!}
</div>

<!-- Tel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tel', 'Tel:') !!}
    {!! Form::text('tel', null, ['class' => 'form-control']) !!}
</div>

<!-- Prenom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prenom', 'Prenom:') !!}
    {!! Form::text('prenom', null, ['class' => 'form-control']) !!}
</div>

<!-- Nom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nom', 'Nom:') !!}
    {!! Form::text('nom', null, ['class' => 'form-control']) !!}
</div>

<!-- Genre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('genre', 'Genre:') !!}
    {!! Form::text('genre', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('comptes.index') }}" class="btn btn-secondary">Cancel</a>
</div>
