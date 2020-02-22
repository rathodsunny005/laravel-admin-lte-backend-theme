<?php

$sidebar_Array=\App\Helper\Helper::sidebar();
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
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
           @foreach($sidebar_Array as $item)    
           @php $url=(route($item['Url'])) @endphp
           <?php
           $child_url = [];
           
           array_walk_recursive($item['child'],function($item_child,$key) use (&$child_url) {
             if($key == 'Url') {
              $child_url[] = $item_child;
             }
           });
           ?>
          
          <li class="nav-item has-treeview @if(in_array(Route::currentRouteName(),$child_url)) menu-open @endif">
            
           
          <a href="{{$url}}" class="nav-link @if(in_array(Route::currentRouteName(),$child_url)) active @endif">
            
          <i class="{{$item['icon']}}"></i>
            <p>
               {{$item['name']}}
                <i class="right fas fa-angle-left"></i>
            </p>
          </a>
            
            @foreach($item['child'] as $childItem)
            <ul class="nav nav-treeview">
              <li class="nav-item">
            
          @php $childurl=(route($childItem['Url'])) @endphp
                <a href="{{$childurl}}" class="nav-link @if(Route::currentRouteName() == $childItem['Url']) active @endif">
                  <i class="{{$childItem['icons']}}"></i>
                  <p>{{$childItem['name']}}</p>
                </a>
              </li>
              </ul>
            @endforeach
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