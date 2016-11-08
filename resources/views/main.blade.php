<!DOCTYPE html>
<html lang="en">

@include('partials._head')

<body>

@include('partials._nav')

<div class="container">
  @include('partials._messages')

  @yield('content')

  <hr>

  <p class="text-center">Copyright AugusTsai</p>


</div> <!-- end of .container -->

    @include('partials._javascript')

    @yield('scripts')
  </body>
</html>