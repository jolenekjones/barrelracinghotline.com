<!-- resources/views/layouts/frontend.blade.php -->
<!DOCTYPE html>
<html lang="en">
@include('layouts._front-end-head')
<body>
   @include('layouts._front-main-nav')
  @yield('content')
  
  @include('layouts._front-end-js')
</body>
</html>