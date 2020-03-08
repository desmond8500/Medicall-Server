<li class="nav-item {{ Request::is('commentaires*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('commentaires.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Commentaires</span>
    </a>
</li>
<li class="nav-item {{ Request::is('comptes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('comptes.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Comptes</span>
    </a>
</li>


<li class="nav-item {{ Request::is('articles*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('articles.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Articles</span>
    </a>
</li>
<li class="nav-item {{ Request::is('rendezvouses*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('rendezvouses.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Rendezvouses</span>
    </a>
</li>
