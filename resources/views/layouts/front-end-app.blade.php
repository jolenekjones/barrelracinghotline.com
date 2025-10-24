<!-- resources/views/layouts/frontend.blade.php -->
<!DOCTYPE html>
<html lang="en">
@include('layouts._front-end-head')

<body>
    @include('layouts._front-main-nav')
    @yield('content')

    @include('layouts._front-end-js')
    @guest
    Front EEENNNNND
        @include('layouts.inc._auto-login')
    @endguest
    @stack('scripts')
</body>

</html>
