

<ul class="sidebarBack">
  @foreach ($dossiers as $key => $dossier)
    <li>
      <a href="/{{ strtolower($section )}}/{{ basename($dossier)}}">
        {{ basename($dossier)}}
      </a>
    </li>
  @endforeach
</ul>
