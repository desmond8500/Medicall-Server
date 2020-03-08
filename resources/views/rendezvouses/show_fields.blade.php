<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $rendezvous->id }}</p>
</div>

<!-- Nom Field -->
<div class="form-group">
    {!! Form::label('nom', 'Nom:') !!}
    <p>{{ $rendezvous->nom }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $rendezvous->email }}</p>
</div>

<!-- Tel Field -->
<div class="form-group">
    {!! Form::label('tel', 'Tel:') !!}
    <p>{{ $rendezvous->tel }}</p>
</div>

<!-- Personnel Field -->
<div class="form-group">
    {!! Form::label('personnel', 'Personnel:') !!}
    <p>{{ $rendezvous->personnel }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $rendezvous->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $rendezvous->updated_at }}</p>
</div>

