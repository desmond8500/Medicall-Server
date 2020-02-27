<!DOCTYPE html>
<html lang="fr">
  @include('health.index.head', ['titre'=>$project->ProjectName])
  <body>
    <div class="super_container">
        @include('health.index.menu') {{-- XS menu --}}

    	<div class="home">
            @yield('content')
    	</div>

        @yield('subcontent')
    	@include('health.footer.footer')
    </div>
    @include('health.script')
  </body>
</html>
