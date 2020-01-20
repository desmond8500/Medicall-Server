<li class="nav-item {{ Request::is('commentaires*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('commentaires.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Commentaires</span>
    </a>
</li>
