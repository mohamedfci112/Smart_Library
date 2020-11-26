@include('layouts.header')
  <!-- Left side column. contains the logo and sidebar -->
@include('layouts.side_bar')
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->

@include('layouts.footer')
  
  