<!DOCTYPE html>
<html lang="fr">
  @include('health.head', ['titre'=>$project->ProjectName])
  <body>
    <div class="super_container">
    	<!-- Menu Mobile -->
      @include('health.menu')

    	<!-- Home -->
    	<div class="home">
    	<!-- Header -->
        @yield('content')
    	</div>

      @yield('subcontent')

    	<!-- Footer -->
    	@include('health.footer.footer')
    </div>

    @include('health.script')
  </body>
</html>
