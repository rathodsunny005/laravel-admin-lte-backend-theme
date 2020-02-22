@extends('Backend.layout.Master.master')

@section('sidebar') Create Product @endsection

@section('content')
          
          <!-- Validation and session -->
             
           <div class="card card-primary">
              <div class="card-header">
              <form action="{{route('pro.store')}}" method="post">
                    @csrf
                  
                <h3 class="card-title">Product</h3>
                
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Product_Name" name="product_name">
                  </div>
                  <div class="form-group">
                    <label>Product Details</label>
                    <input type="text" class="form-control" id="Details" placeholder="product Details" name="product_details">
                  </div>
                  <div class="form-group">
                    <label>Stock</label>
                    <input type="text" class="form-control" id="Stock" placeholder="product stock" name="stock">
                  </div>
                
                 
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              
            </div>
      </div>



@endsection