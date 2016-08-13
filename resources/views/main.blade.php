<!DOCTYPE html>
<html>
  @include('partials.header')
  <body>
    @include('partials.nav')

    <div class="container">
      @yield('content')
    </div>
    <!-- end of .container -->

    @include('partials.footer')
  </body>
</html>
