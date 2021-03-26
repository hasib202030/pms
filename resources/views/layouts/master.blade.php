
<!DOCTYPE html>

<html lang="en">
<head>
    @include('layouts.partials._head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  @include('layouts.partials._navbar')
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    @include('layouts.partials._sidbar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->

    @include('layouts.partials._footer')
</div>
<!-- ./wrapper -->

  @include('layouts.partials._footer_script')
</body>
</html>
