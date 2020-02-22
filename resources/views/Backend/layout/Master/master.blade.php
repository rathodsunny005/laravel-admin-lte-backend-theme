<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>@yield('title')</title>

    @include('Backend.layout.Header.css')    
  </head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  @include('Backend.layout.Header.TopNavbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  
  @include('Backend.layout.Sidebar.sidebar4')

<!-- validation -->
  @include('Backend.layout.Validation.validation')
  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  <!-- /.content-wrapper -->

  
  <!-- Main Footer -->
  @include('Backend.layout.Footer.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
@include('Backend.layout.Footer.js')
</body>
</html>
