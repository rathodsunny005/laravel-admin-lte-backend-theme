<html>
<head>



<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

@include('Backend.layout.Validation.validation')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<h2>HTML Table</h2>

<table>
  <tr>
    <th>ID</th>
    <th>KeyPress</th>
 </tr>
 @foreach($keypress as $p)
  <tr>
  
    <td>{{$p->id}}</td>
    <td>{{$p->keypress}}</td>
    <td>
                <a href="{{ route('edit',$p->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('key', $p->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>

  </tr>
  @endforeach


</table>

</body>
</html>
