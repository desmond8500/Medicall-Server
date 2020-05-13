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
<li class="nav-item {{ Request::is('rvs*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('rvs.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Rvs</span>
    </a>
</li>
<li class="nav-item {{ Request::is('newsletters*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('newsletters.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Newsletters</span>
    </a>
</li>
<li class="nav-item {{ Request::is('inscriptions*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('inscriptions.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Inscriptions</span>
    </a>
</li>
<li class="nav-item {{ Request::is('todos*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('todos.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Todos</span>
    </a>
</li>
<li class="nav-item {{ Request::is('todolists*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('todolists.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Todolists</span>
    </a>
</li>
