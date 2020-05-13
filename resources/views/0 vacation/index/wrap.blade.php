<div class="wrap">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col d-flex align-items-center">
                <p class="mb-0 phone">
                    {{-- <span class="mailus">Téléphone:</span>  --}}
                    <a href="#">+221 77 837 23 90 </a> /
                    {{-- <span class="mailus">Email:</span>  --}}
                    <a href="#">medicallsante@gmail.com</a>
                </p>
            </div>
            <div class="col d-flex justify-content-end">
                <div class="social-media">
                    <p class="mb-0 d-flex">
                        @yield('adminmenu')

                        @auth
                            {{-- @if ($user->role=='admin')
                                <a href="{{route('admin.index')}}" class="d-flex align-items-center justify-content-center">
                                    <span class="fa fa-user"><i class="sr-only">Facebook</i></span>
                                </a>
                            @endif --}}
                        @endauth


                        <a target="_blank" href="{{url('https://web.facebook.com/Medicallsante-102779334743423/?__tn__=%2Cd%2CP-R&eid=ARBpAVhtyIzSwnSYNAtDd56LxIYkdqy599QlOkpiR9BxRevtgPdH29m_9lzgippyn-rmNbkudxeJmWCg')}}" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                        <a target="_blank" href="{{url('https://twitter.com/MedicallSuivi')}}" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                        <a target="_blank" href="{{url('https://www.linkedin.com/in/medicall-sant%C3%A9-suivi-3809021a0/')}}" class="d-flex align-items-center justify-content-center"><span class="fa fa-linkedin"><i class="sr-only">Linkedin</i></span></a>
                        {{-- <a href="{{url('')}}" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a> --}}
                        {{-- <a href="{{url('')}}" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a> --}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
