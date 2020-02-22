@if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif


@if(session()->get('info'))
    <div class="alert alert-info">
      {{ session()->get('info') }}  
    </div>
@endif

@if(session()->get('warning'))
    <div class="alert alert-warning">
      {{ session()->get('warning') }}  
    </div>
@endif


@if(session()->get('danger'))
    <div class="alert alert-danger">
      {{ session()->get('danger') }}  
    </div>
@endif


@if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                  </div><br />
             @endif

  
