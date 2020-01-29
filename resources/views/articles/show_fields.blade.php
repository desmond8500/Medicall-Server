<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $article->id }}</p>
</div>

<!-- Titre Field -->
<div class="form-group">
    {!! Form::label('titre', 'Titre:') !!}
    <p>{{ $article->titre }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <p>{{ $article->image }}</p>
</div>

<!-- Contenu Field -->
<div class="form-group">
    {!! Form::label('contenu', 'Contenu:') !!}
    <p>{{ $article->contenu }}</p>
</div>

<!-- Auteur Field -->
<div class="form-group">
    {!! Form::label('auteur', 'Auteur:') !!}
    <p>{{ $article->auteur }}</p>
</div>

<!-- Categorie Field -->
<div class="form-group">
    {!! Form::label('categorie', 'Categorie:') !!}
    <p>{{ $article->categorie }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $article->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $article->updated_at }}</p>
</div>

