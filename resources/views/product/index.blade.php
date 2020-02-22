@extends('Backend.layout.Master.master')

<!-- Title -->
@section('title')Product list  @endsection

<!-- sidebar -->

@section('sidebar')Product list @endsection

@section('content')
<div class="col-sm-12"></div>
<div class="row">
<div class="col-sm-12">
   
    <a href="{{route('pro.create')}}" class= "btn btn-primary"> Product Create</a>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Product Name</td>
          <td>Product Details</td>
          <td>Stock</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($product as $p)
        <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->product_name}}</td>
            <td>{{$p->product_details}}</td>
            <td>{{$p->stock}}</td>
            <td>
                <a href="{{ route('pro.edit',$p->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('pro.destroy', $p->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
</div>




@endsection