
<table>
<tr>
<td>
@if(isset($editUrl))

<a href="{{ route('products.edit',$editUrl)}}" class="btn btn-primary">Edit</a>

@endif
</td>



<td>
@if(isset($delete))

<form action="{{ route('products.destroy', $delete)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>


@endif
</td>
</tr>

</table>