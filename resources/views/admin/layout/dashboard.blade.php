<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags --> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')</title>
  <!-- base:css -->
  @include('admin.include.style')
  @stack('style')
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('admin.include.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.include.sidebar')
      <!-- partial -->
      <div class="main-panel">
        @yield('konten')
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('admin.include.footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  @stack('script')
  @include('admin.include.script')
  <!-- base:js -->
  
  <!-- End custom js for this page-->
</body>

</html>

