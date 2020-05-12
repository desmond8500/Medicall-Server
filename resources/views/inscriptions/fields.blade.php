<!-- Nom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nom', 'Nom:') !!}
    {!! Form::text('nom', null, ['class' => 'form-control']) !!}
</div>

<!-- Tel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tel', 'Tel:') !!}
    {!! Form::text('tel', null, ['class' => 'form-control']) !!}
</div>

<!-- Cv Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cv', 'Cv:') !!}
    {!! Form::text('cv', null, ['class' => 'form-control']) !!}
</div>

<!-- Resume Field -->
<div class="form-group col-sm-6">
    {!! Form::label('resume', 'Resume:') !!}
    {!! Form::text('resume', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('inscriptions.index') }}" class="btn btn-secondary">Cancel</a>
</div>
