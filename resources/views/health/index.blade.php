<!DOCTYPE html>
<html lang="fr">
  @include('health.head', ['titre'=>$project->ProjectName])
  <body>
    <div class="super_container">
    	<!-- Menu -->
      @include('health.menu')

    	<!-- Home -->
    	<div class="home">
    		<div class="background_image" style="background-image:url({!! asset($project->ProjectHomeContent[0]->image) !!})"></div>

    		<!-- Header -->
    		@include('health.header')
    		@include('health.homeContainer')
        @yield('content')
    	</div>

      <!-- Info Boxes -->
    	@include('health.content.infoBoxes')

    	<!-- CTA -->
    	@include('health.content.cta')

    	<!-- Services -->
      @include('health.content.services')

    	<!-- Departments -->
    	@include('health.departement')

    	<!-- FAQ & News -->
    	@include('health.faq')

    	<!-- Footer -->
    	@include('health.footer.footer')
    </div>

    @include('health.script')
  </body>
</html>
