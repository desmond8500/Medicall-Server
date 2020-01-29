<!-- Titre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titre', 'Titre:') !!}
    {!! Form::text('titre', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::text('image', null, ['class' => 'form-control']) !!}
</div>

<!-- Contenu Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contenu', 'Contenu:') !!}
    {!! Form::text('contenu', null, ['class' => 'form-control']) !!}
</div>

<!-- Auteur Field -->
<div class="form-group col-sm-6">
    {!! Form::label('auteur', 'Auteur:') !!}
    {!! Form::text('auteur', null, ['class' => 'form-control']) !!}
</div>

<!-- Categorie Field -->
<div class="form-group col-sm-6">
    {!! Form::label('categorie', 'Categorie:') !!}
    {!! Form::text('categorie', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('articles.index') }}" class="btn btn-secondary">Cancel</a>
</div>
