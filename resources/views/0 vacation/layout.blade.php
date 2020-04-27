<!DOCTYPE html>
<html lang="en">
    @php
        use App\Http\Controllers\MedicallController;
        $page = new MedicallController();
    @endphp


    @include('0 vacation.index.head')
    <body>
        @include('0 vacation.index.wrap')
        @include('0 vacation.index.nav')

        @yield('content')

        @include('0 vacation.index.footer')

        <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
        @include('0 vacation.index.script')
    </body>
</html>
