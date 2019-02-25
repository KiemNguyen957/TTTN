<!DOCTYPE html>
<html lang="en">
  @include('admin.partials.head')
<body>
  <section id="container">

  @include('admin.partials.header')
    @yield('content')
    @include('admin.partials.footer')
  </section>
  @include('admin.partials.script')
  @yield('libjs')
  
 
</body>

</html>