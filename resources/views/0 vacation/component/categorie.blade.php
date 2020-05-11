<h3>Catégories</h3>
<div class="card ">

    <div class="list-group">

        <a href="{{route('blog')}}" class="list-group-item list-group-item-action {{ $menu ?? 'active' }} ">Tous les articles</a>

        @foreach ($topics as $topic)
            @isset ($menu)
                @if ($topic->id == $menu->id)
                    <a href="{{route('blog',['topic'=>$topic->id])}}" class="list-group-item list-group-item-action active">{{ $topic->name }}</a>
                    @else
                    <a href="{{route('blog',['topic'=>$topic->id])}}" class="list-group-item list-group-item-action">{{ $topic->name }}</a>
                    @endif
                @else
                <a href="{{route('blog',['topic'=>$topic->id])}}" class="list-group-item list-group-item-action">{{ $topic->name }}</a>
            @endisset
        @endforeach
    </div>
</div>
