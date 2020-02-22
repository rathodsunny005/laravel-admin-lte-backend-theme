<?php

$a=\App\Helper\Helper::sidebar();
//dd($a);


?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <?php print_r($a); exit; ?>
          @foreach($a as $keys=>$values)
          <li class="nav-item has-treeview menu-open">
             <a href="#" class="nav-link active">
              <i class="{{$values['icon']}}"></i>
              <p>
              {{ $values['name']}}
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            </li>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                @foreach($values['child'] as $k=>$v )
                @forelse($v as $keys=>$data)
                
                 
                    <a href="{{$data}}" class="nav-link">
                    <i class="{{$data}}"></i>
                    <p>{{$data['name']}}</p>
                    </a>
                </li>
                
            </ul>
          
          </li>
            @endforeach
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">@yield('sidebar')</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right"></ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      