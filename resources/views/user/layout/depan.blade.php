<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>@yield('title')</title>

    @stack('style')
    @include('user.include.style')
    <style>
      .dropdown-menu {
          display: none;
      }

      .dropdown:hover .dropdown-menu {
          display: block;
      }
    </style>

<!-- TemplateMo 568 DigiMedia https://templatemo.com/tm-568-digimedia -->

  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  
  <!-- ***** Preloader End ***** -->

  <!-- Pre-header Starts -->
  
  <!-- Pre-header End -->

  <!-- ***** Header Area Start ***** -->
  @include('user.include.header')
  <!-- ***** Header Area End ***** -->

  @yield('isi')

  @include('user.include.footer')

  <!-- Scripts -->
  @include('user.include.script')
  @stack('script')

</body>
</html>