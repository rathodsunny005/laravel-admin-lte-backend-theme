@extends('Backend.layout.Master.master')

@section('sidebar')Edit Product @endsection

@section('content')
            @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                  </div><br />
             @endif
             @if(Session::has('success'))
             <div class="alert alert-success">
                {{ Session::get('success') }}
                @php
                    Session::forget('success');
                @endphp
            </div>
          @endif
            <div class="card card-primary">
              <div class="card-header">
              <form action="{{route('pro.update',$edit->id)}}" method="post">
                    @csrf
                    @method('patch')
                  
                <h3 class="card-title">Product</h3>
                
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Product_Name" name="product_name" value="{{$edit->product_name}}">
                  </div>
                  <div class="form-group">
                    <label>Product Details</label>
                    <input type="text" class="form-control" id="Details" placeholder="product Details" name="product_details" value="{{$edit->product_details}}">
                  </div>
                  <div class="form-group">
                    <label>Stock</label>
                    <input type="text" class="form-control" id="Stock" placeholder="product stock" name="stock" value="{{$edit->stock}}">
                  </div>
                
                 
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
</div>


@endsection