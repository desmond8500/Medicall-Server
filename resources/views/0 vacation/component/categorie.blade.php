<h3>Catégories</h3>
<div class="card ">
    <div class="card-body">
        <ul>
            <li>
                <a href="{{route('blog')}} ">Tous les articles</a>
            </li>
            @foreach ($topics as $topic)
            <li>
                <a href="{{route('blog',['topic'=>$topic->id])}} ">{{ $topic->name }}</a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
