<!DOCTYPE html>
<html lang="fr">
  @include('health.head', ['titre' => 'Medicall'])
<body>
  @include('health.patients.navbar')
  <div class="container">
    <div class="row">
      @yield('content')
    </div>
  </div>
  @include('health.script')
</body>
</html>
