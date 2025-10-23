@php
$url_last_part = Request::segment(count(Request::segments()));
@endphp
<div id="fh5co-page">
    <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
    <aside id="fh5co-aside" role="complementary" class="border js-fullheight">

        <h1 id="fh5co-logo"><a href="{{url('/')}}">
            <img class="w-100" src="{{url('/assets/img/logo.jpg')}}" alt="Barrel Racing Hotline"></a></h1>
        <nav id="fh5co-main-menu" role="navigation">
            <div class="mb-3">
            <div class="text-decoration-none text-center">
                @if(auth()->check())
                <a class="hide-mobile" href="{{ url('/profile/' . auth()->user()->id) }}">
                    <img class="img-profile-pic-sm mt-2 loggedin"
                         src="{{ !empty(auth()->user()->profile150x150) ? auth()->user()->profile150x150 : url('/assets_admin/images/profile/user-1.jpg') }}"
                         alt="Profile Pic">
                </a>
                <p class="pt-2">
                    @if(auth()->check())
                    <a href="{{env('HOTLINEWEBSITE_LINK')}}/horsehotline/manage">
                          My Account
                    </a>
                    @else
                    <a href="{{env('HOTLINEWEBSITE_LINK')}}/login?site-url={{env('HOTLINEWEBSITE_LINK')}}/horsehotline/manage">
                       My Account
                    </a>
                    @endif
                </p>
                @endif


                @if(auth()->check())
                               <p class="pl-5">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" style="background: transparent; border: none;">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </p>
                @else
                <p>
                    <a href="{{env('HOTLINEWEBSITE_LINK')}}/login?site-url={{env('REFSITE_AFTERLOGIN_LINK')}}">
                      Log In
                    </a>
                </p>
                <p>
                    <a href="{{env('HOTLINEWEBSITE_LINK')}}/registration?site-url={{env('REFSITE_AFTERLOGIN_LINK')}}">
                        Create Account
                    </a>
                </p>
                @endif
                <hr>
            </div>
        </div>
            <ul>
                <li class="{{empty($url_last_part)?'fh5co-active':''}}"><a href="{{url('/')}}">Home</a></li>
                <li class="{{$url_last_part=='horses'?'fh5co-active':''}}"><a href="{{url('/horses')}}">Horses</a></li>
                <li class="{{$url_last_part=='about'?'fh5co-active':''}}"><a href="#">About</a></li>
                <li class="{{$url_last_part=='contact'?'fh5co-active':''}}"><a href="#">Contact</a></li>
            </ul>
        </nav>


    </aside>

</div>
