@extends('Backend.layout.Master.master')

<!-- Title -->
@section('title')Product list  @endsection

<!-- sidebar -->
@include('Backend.layout.Header.css')

@include('Backend.layout.Footer.js')

@section('sidebar')Product list @endsection

@section('content')
<div class="col-sm-12"></div>
<div class="row">
<div class="col-sm-12">
   
    <a href="{{route('products.create')}}" class= "btn btn-primary"> Product Create</a>
  <table class="table table-striped" id="user_table">
  </table>
</div>
</div>


@endsection

<script>
$(document).ready(function(){
    $('#user_table').DataTable({
        processing:true,
        serverSide:true,
        ajax:{
            url:"{{route('products.index')}}",
        },
        columns:[
                {data:'id',name:'id',title:'Id'},
                {data:'product_name',name:'product_name',title:'productname'},
                {data:'product_details',name:'product_details',title:'productdetails'},
                {data:'stock',name:'stock',title:'stock'},
                {data:'action',name:'action',orderable:false,}
            ]
        });
   
});

</script>