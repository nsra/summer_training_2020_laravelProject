<!Doctype html>
<html lang="en">
  <head>
  @include('layouts.partials.head')
  @yield('style')
  </head>

  <body>
    <header>
      @include('layouts.partials.header')
    </header>
    <div>
      @yield('content')
    </div>
    <footer>
      <div class="footer">
        @include('layouts.partials.footer')
      </div>
      <script>
        @yield('script')
      </script>
    </footer>
  </body>
</html>
