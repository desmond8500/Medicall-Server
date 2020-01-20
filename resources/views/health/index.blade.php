<!DOCTYPE html>
<html lang="fr">
  @include('health.head')
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
    	</div>

    	{{-- <!-- Info Boxes -->
    	@include('health.infoBoxes')

    	<!-- CTA -->
    	@include('health.cta')

    	<!-- Services -->
      @include('health.service')

    	<!-- Departments -->
    	@include('health.departement')

    	<!-- FAQ & News -->
    	@include('health.faq')

      --}}
    	<!-- Footer -->
    	@include('health.footer')
    </div>

    @include('health.script')
  </body>
</html>
